<?php
namespace App\Controllers;

use App\Controllers\BaseController;
// import atau gunakan
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\NewsModel;

class News extends BaseController {
    public function index()
    {
        // berisi model panggil NewsModel mungkin instansiasi model
        $model = model(NewsModel::class);

        $data = [
            // berisi panggil model nya lalu panggil method dapatkanBerita
            'news' => $model->getNews(),
            'title' => 'News archive'
        ];  

        // kembalikkan ke tampilan templates/header lalu kirimkan value variable $data
        return view('templates/header', $data)
            // ke tampilan news/index
            . view('news/index')
            // ke tampilan templates/footer
            . view('templates/footer');
    }

    // parameter $slug secara bawaan diisi null
    public function show($slug = null)
    {
        // berisi instansiasi NewsModel nya
        $model = model(NewsModel::class);
        // panggil modelnya lalu panggil method dapatkanBerita lalu kirimkan value parameter slug
        $data['news'] = $model->getNews($slug);

        // jika tidak ada detail berita padahal pasti ada kecuali dimanunipulasi lewat url
        // jika kosong dari $data['news']
        if (empty($data['news'])) {
            // lemparkan baru HalamanTidakDitemukanPengecualian('Tidak dapat menemukan berita' digabung value parameter slug misalnya berita banteng PDI)
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        // berisi detail_berita, column title
        $data['title'] = $data['news']['title'];

        // kembalikkan ke tampilan templates/header lalu kirimkan value variable $data
        return view('templates/header', $data)
            // ke tampilan news/view
            . view('news/view')
            // ke tampilan templates/footer
            . view('templates/footer');
    }

    // ke tampilan view('news/create')
    public function new()
    {
        // pembantu form.
        helper('form');

        // kembalikkan ke tampilan templates/header lalu kirimkan title yg berisi string berikut
        return view('templates/header', ['title' => 'Create a new item'])
            // panggil tampilan news/create
            . view('news/create')
            // panggil tampilan templates/footer
            . view('templates/footer');
    }

    public function create()
    {
        helper('form');

        // Memeriksa apakah data yang dikirimkan lolos aturan validasi.
        if (! $this->validate([
            'title' => 'required|max_length[255]|min_length[3]',
            'body' => 'required|max_length[5000]|min_length[10]'
        ])) {   
            // Validasi gagal, jadi panggil method new yang berada diluar agar menampilkan halaman formulir
            return $this->new();
        }

        // dapatkan data yang di validasi
        $post = $this->validator->getValidated();

        // instansiasi NewsModel
        $model = model(NewsModel::class);

        // simpan berita 
        // panggil table berita, lalu simpan
        $model->save([
            // column title diisi value input="title"
            'title' => $post['title'],
            // buat slug
            // column slug berisi url judul berisi value input name="title", jika ada spasi maka diganti -
            'slug' => url_title($post['title'], '-', true),
            // column body diisi value input name="body"
            'body' => $post['body']
        ]);

        // kembalikkan ke tampilan templates/header, kirimkan variable judul berisi buat sebuah barang baru
        return view('templates/header', ['title' => 'Create a new item'])
            // ke tampilan news/success
            . view('news/success')
            // ke tampilan templates/footer
            . view('templates/footer');
    }
}