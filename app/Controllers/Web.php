<?php

namespace App\Controllers;

// kode ini didapatkan dari slide
// defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends BaseController
{
    // kode ini didapatkan dari slide
    // function __construct()
    // {
    //     parent::__construct();
    // }

    public function index()
    {
        // kirimkan array data, index judul berisi string berikut
        $data = [
            // key judul berisi string berikut
            'judul' => 'Halaman Depan'
        ];
        // kembaikkan ke tampilan berikut sesuai urutan
        return view('v_header', $data)
            . view('v_index', $data)
            . view('v_footer', $data); 
    }

    public function about()
    {
        // kirimkan array data, index judul berisi string berikut
        $data = [
            // key judul berisi string berikut
            'judul' => 'Halaman About'
        ];
        // kembaikkan ke tampilan berikut sesuai urutan
        return view('v_header', $data)
            . view('v_about', $data)
            . view('v_footer', $data); 
    }
}
