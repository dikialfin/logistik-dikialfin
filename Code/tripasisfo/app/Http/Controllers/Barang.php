<?php

namespace App\Http\Controllers;

use App\Models\Barang as ModelsBarang;
use Exception;
use Illuminate\Http\Request;

class Barang extends Controller
{
    protected $barangModel;

    public function __construct() {
        $this->barangModel = new ModelsBarang();
    }

    public function paginateData() {
        return $this->barangModel->orderByDesc('created_at')->paginate(3);
    }

    public function getAllBarang() {
        return $this->barangModel->get();
    }

    public function inputBarang(Request $request) {

        $request->validate([
            'kuantitas' => 'required|integer|gt:0',
            'nama' => 'required|',
        ]);

        try {
            $this->barangModel->createDataStokBarang($request->post());
            return redirect()->back()->with('success','berhasil insert data');
        } catch (Exception $err) {
            return redirect()->back()->with('failed',$err->getMessage());
        }

    }
}
