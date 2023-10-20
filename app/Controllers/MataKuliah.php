<?php

// ruangnama memanggil package dan menggunakannya
namespace App\Controllers;
use App\Models\Model_latihan1;

// kelas MataKuliah memperluas DasarPengendali
class MataKuliah extendS BaseController {
    public function index()
    {
        return view('view-form-matakuliah');
    }

    public function cetak()
    {
        // berisi memanggil konfigurasi layanan permintaaan
        $request = \Config\Services::request();
        // berisi array assosiatif
        $data = [
            // dapatkan value input name="kode"
            // index kode berisi permntaan, dapatkanKirim kode
            'kode' => $request->getPost('kode'),
            'nama' => $request->getPost('nama'),
            'sks' => $request->getPost('sks'),
        ];

        // kembalikkan ke tampilan berikut lalu kirimkan variable $data berisi array
        return view('view-data-matakuliah', $data);
    }
}