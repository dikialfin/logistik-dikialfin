<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Barang as ControllerBarang;
use App\Models\Transaksi;

class ViewController extends Controller
{
    protected $barangController;
    protected $transaksiModel;

    public function __construct() {
        $this->barangController = new ControllerBarang();
        $this->transaksiModel = new Transaksi();
    }

    public function barangMasuk() {
        return view('barangMasuk',[
            'listBarangKeluar' => $this->transaksiModel->getBarangMasuk()
        ]);
    }
    public function barangKeluar() {
        return view('barangKeluar',[
            'listBarangKeluar' => $this->transaksiModel->getBarangKeluar()
        ]);
    }
    public function stokBarang() {
        return view('stokBarang',[
            "listBarang" => $this->barangController->paginateData()
        ]);
    }
    public function formBarangMasuk() {
        return view('formBarangMasuk',['listBarang' => $this->barangController->getAllBarang()]);
    }
    public function formBarangKeluar() {
        return view('formBarangKeluar',['listBarang' => $this->barangController->getAllBarang()]);
    }
}
