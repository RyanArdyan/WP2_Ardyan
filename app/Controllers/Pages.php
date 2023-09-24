<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index()
    {
        // Kembalikkan ke tampilan welcome_message
        return view('welcome_message');
    }

    // parameter $page berisi 'home'
    public function view($page = 'home')
    {
        // jika tidak ada file dari app/Views/pages/ halaman yang inin user akses maka kesalahan “Halaman 404 tidak ditemukan” akan ditampilkan.
        if (! is_file(APPPATH  . 'Views/pages/' . $page . '.php')) {
            // Whoops, kami tidak memiliki halaman itu
            // lemparkan baru HalamanTidakDitemukanPengecualian($halaman)
            throw new PageNotFoundException('Halaman ' . $page . ' tidak ada ya.');
        }

        $data['title'] = ucfirst($page); // ucfirst berarti mengubah huruf diawal kata menjadi huruf besar

        // kembalikkan ke tampilan templates/header lalu kirimkan value variable $data['title]
        return view('templates/header', $data)
            // ke tampilan pages/ halaman yg ingin anda tuju misalnya home lewat url /home
            . view('pages/' . $page)
            // ke tampilan templates/footer
            . view('templates/footer');
    }
}
