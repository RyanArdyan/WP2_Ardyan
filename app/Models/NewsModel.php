<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    // nama table nya adalah news
    // lindungi $meja = 'berita'
    protected $table = 'news';

    // lindungi bidangYgDiizinkan seperti column title, slug dan body
    protected $allowedFields = ['title', 'slug', 'body'];

    // parameter $slug berisi false
    public function getNews($slug = false)
    {
        // jika value $slug sama dengan atau berisi false atau tidak ada karena sengaja agar mengambil semua berita
        if ($slug === false) {
            // mengambil semua berita
            // kembalikkan panggil table news, cariSemua
            return $this->findAll();
        };

        // mengambil detail_berita berdasarkan slug yg dikirim lewat parameter
        // kembalikkan table news, dimana value column slug sama denganvalue parameter slug, ambil value pertama
        return $this->where(['slug' => $slug])->first();
    }

}