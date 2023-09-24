<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News;

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
// (:segment nih berarti bebas), jika user menulis url home maka arahkan ke Controllers/Pages, method view
$routes->get('(:segment)', [Pages::class, 'view']);


// orang kota pesan komunitas pengajar untuk datang ke desa lalu 