<?php

namespace App\Http\Controllers;

use App\Models\Barang as ModelsBarang;
use Illuminate\Http\Request;

class Barang extends Controller
{
    protected $barangModel;

    public function __construct() {
        $this->barangModel = new ModelsBarang();
    }

    public function paginateData() {
        return $this->barangModel->paginate(3);
    }

    public function getAllBarang() {
        return $this->barangModel->get();
    }
}
