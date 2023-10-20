<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News;
use App\Controllers\Latihan1;
use App\Controllers\MataKuliah;
use App\Controllers\Web;

/**
 * @var RouteCollection $routes
 */
// rute tipe dapatkan, jika user diarahkan ke url awal maka arahkan ke HomeController, method index
$routes->get('/', 'Home::index');

// rute tipe dapatkan, jika user diarahkan ke url news maka arahkan ke Controllers/News, method index
$routes->get('news', [News::class, 'index']);
// route tipe dapatkan, jika user diarahkan ke url berikut maka arahkan ke Controllers/User, method new
$routes->get('news/new', [News::class, 'new']);
// rute tipe kirim, jika user diarahkan ke url news maka arahkan ke Controllers/News, method create
$routes->post('news', [News::class, 'create']);
// (:segment nih berarti bebas), bisa digunakan untuk mendapatkan dan mengirim slug untuk mengambil detail_berita
// rute tipe dapatkan, jika user diarahkan ke url news maka arahkan ke Controllers/News, method show
$routes->get('news/(:segment)', [News::class, 'show']);

// rute tipe dapatkan, jika user diarahkan ke url pages maka arahkan ke PageController, method index
$routes->get('pages', [Pages::class, 'index']);
// rute tipe dapatkan, jika user diarahkan ke url latihan1 maka arahkan ke LatihanController1, method index
$routes->get('latihan-1', [Latihan1::class, 'index']);
// rute tipe dapatkan, jika user diarahkan ke url berikut kirimkan 2 argument maka arahkan ke Latihan1, method penjumlahan
$routes->get('latihan-1/(:segment)/(:segment)', [Latihan1::class, 'penjumlahan']);
// rute tipe dapatkan, jika user diarahkan ke url berikut maka arahkan ke MataKuliah, method index
$routes->get('form-mata-kuliah', [MataKuliah::class, 'index']);
// rute tipe kirim, jika user diarahkan ke url berikut maka arahkan ke MataKuliah, method cetak
$routes->post('matakuliah/cetak', [MataKuliah::class, 'cetak']);


// rute tipe dapatkan, jika user diarahkan ke url Web maka arahkan ke WebController, method index
$routes->get('web', [Web::class, 'index']);
// rute tipe dapatkan, jika user diarahkan ke url berikut maka arahkan ke WebController, method index
$routes->get('web/about', [Web::class, 'about']);


// (:segment nih berarti bebas), jika user menulis url home maka arahkan ke Controllers/Pages, method view
$routes->get('(:segment)', [Pages::class, 'view']);

// tenangkan diri dulu nonton youtube bentar



