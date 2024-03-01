<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Start::index');
$routes->get('/register', 'Start::register');
$routes->get('/login', 'Start::login');
$routes->get('/beranda', 'Start::beranda');
$routes->get('/home', 'Home::index');
$routes->get('auth/activate/(:any)', 'Auth::activate/$1');

$routes->post('/auth/valid_register', 'Auth::valid_register');
$routes->post('/auth/valid_login', 'Auth::valid_login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/login', 'Auth::beranda');
$routes->get('/profile', 'Start::profile');
$routes->get('/upload', 'Start::upload');
$routes->post('/upload/save', 'Start::save');
$routes->get('/editprofile', 'Start::editprofile');
$routes->post('/editprofile/simpan', 'Start::editprofilesimpan');
$routes->get('/posting/(:num)', 'Start::posting/$1');
$routes->post('/editprofile/save', 'Start::editprofilesave');

$routes->post('/komentar/save/(:num)', 'Start::komentarsave/$1');
$routes->get('/user/album/(:num)', 'Start::album/$1');
$routes->get('/user/like/(:num)', 'Start::liked/$1');


$routes->post('/search', 'Home::search');

$routes->get('/like/(:num)', 'Home::like/$1');
$routes->get('/unlike/(:num)', 'Home::unlike/$1');

$routes->get('/hapusalbum/(:num)', 'Home::hapusalbum/$1');

$routes->get('/editalbum/(:num)/(:any)', 'Home::editalbum/$1/$2');

$routes->get('/hapusdarialbum/(:num)/(:num)', 'Home::hapusdarialbum/$1/$2');

$routes->get('/submitalbum/(:any)', 'Home::submitalbum/$1');

$routes->get('/tambahalbum/(:num)/(:num)', 'Home::tambahalbum/$1/$2');

$routes->get('/bukaalbum/(:num)', 'Home::bukaalbum/$1');


