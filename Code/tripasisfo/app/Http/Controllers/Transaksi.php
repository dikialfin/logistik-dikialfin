<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi as ModelsTransaksi;
use Exception;
use Illuminate\Http\Request;

class Transaksi extends Controller
{
    private $transaksiModel;
    private $barangModel;

    public function __construct() {
        $this->transaksiModel = new ModelsTransaksi();
        $this->barangModel = new Barang();
    }

    public function barangKeluar(Request $request) {

        $request->validate([
            'kuantitas' => 'required|integer|gt:0',
            'barang' => 'required|exists:barang,id',
            'tujuan' => 'required',
            'tanggal' => 'required|date',
        ]);

        $currentKuantitas = $this->barangModel->getKuantitasBarang($request->post('barang'));

        if ($currentKuantitas == null || $currentKuantitas < $request->post('kuantitas')) {
            return redirect()->back()->with('failed','kuantitas melebihi stok barang');
        }

        try {
            $this->transaksiModel->createDataBarangKeluar($request->post());
            return redirect()->back()->with('success','berhasil insert data');
        } catch (Exception $err) {
            return redirect()->back()->with('failed',$err->getMessage());
        }

    }

    public function barangMasuk(Request $request) {

        $request->validate([
            'kuantitas' => 'required|integer|gt:0',
            'barang' => 'required|exists:barang,id',
            'asal' => 'required',
            'tanggal' => 'required|date',
        ]);

        try {
            $this->transaksiModel->createDataBarangMasuk($request->post());
            return redirect()->back()->with('success','berhasil insert data');
        } catch (Exception $err) {
            return redirect()->back()->with('failed',$err->getMessage());
        }

    }
}
