<?php

// ruangnama memanggil package dan menggunakannya
namespace App\Controllers;
use App\Models\Model_latihan1;

// kelas Latihan1 memperluas DasarPengendali
class Latihan1 extendS BaseController {
    // method index
    public function index()
    {
        echo "Selamat datang... selamat belajar web programming";
    }

    // method penjumlahan ada 2 parameter $n1, $n2 anggaplah berisi 1 dan 2
    public function penjumlahan($n1, $n2)
    {

        // berisi model panggil Model_latihan1 lalu instansiasi model
        $model_latihan1 = new Model_latihan1();

        // array data, index nilai1 berisi mengubah tipe data dari value parameter $int1 dari string menjadi angka
        $data['nilai1'] = intval($n1);
        // array data, index nilai2 berisi mengubah tipe data dari value parameter $int2 dari string menjadi angka
        $data['nilai2'] = intval($n2);

        // array data, index hasil berisi panggil cetakan model_latihan_1, lalu panggil method jumlah lalu kirimkan 2 argument yaitu 2 value dari parameter anggaplah 1 dan 2
        $data['hasil'] = $model_latihan1->jumlah( $data['nilai1'], $data['nilai2'] );

        // kembalikkan ke tampilan view-latihan1 lalu kirimkan data berupa array
        return view('view-latihan1', $data);
    }    
}