<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaksi extends Model
{
    public $table = 'transaksi';

    public function getBarangKeluar() {
        return $this->
            join('barang', 'transaksi.id_barang', '=', 'barang.id')
            ->where('transaksi.jenis_transaksi','keluar')
            ->select('transaksi.*', 'barang.nama as nama_barang')
            ->orderByDesc('created_at')
            ->paginate(3);
    }

    public function getBarangMasuk() {
        return $this->
            join('barang', 'transaksi.id_barang', '=', 'barang.id')
            ->where('transaksi.jenis_transaksi','masuk')
            ->select('transaksi.*', 'barang.nama as nama_barang')
            ->orderByDesc('created_at')
            ->paginate(3);
    }


    public function createDataBarangKeluar(array $data) {
        try {
            DB::beginTransaction();

            // Kurangi Barang
            $barang = Barang::find($data['barang']);
            $barang->kuantitas -= $data['kuantitas'];
            $barang->save();

            // Catat Barang Keluar
            $this->id_barang = $data['barang'];
            $this->kuantitas = $data['kuantitas'];
            $this->jenis_transaksi = 'keluar';
            $this->asal_tujuan_barang = $data['tujuan'];
            $this->tanggal_transaksi = $data['tanggal'];
            $this->save();
            DB::commit();
            return true;
        } catch (Exception $error) {
            DB::rollBack();
            throw $error;
        }
    }

    public function createDataBarangMasuk(array $data) {
        try {
            DB::beginTransaction();

            // Kurangi Barang
            $barang = Barang::find($data['barang']);
            $barang->kuantitas += $data['kuantitas'];
            $barang->save();

            // Catat Barang Masuk
            $this->id_barang = $data['barang'];
            $this->kuantitas = $data['kuantitas'];
            $this->jenis_transaksi = 'masuk';
            $this->asal_tujuan_barang = $data['asal'];
            $this->tanggal_transaksi = $data['tanggal'];
            $this->save();
            DB::commit();
            return true;
        } catch (Exception $error) {
            DB::rollBack();
            throw $error;
        }
    }

}
