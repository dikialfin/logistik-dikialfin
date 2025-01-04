<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $table = 'barang';
    public $timestamps = true;

    public function getKuantitasBarang(int $idBarang) {
        $kuantitas = $this->select('kuantitas')->where('id',$idBarang)->get()->first();

        return $kuantitas != null ? $kuantitas->kuantitas : 0;
    }
    
}
