<<<<<<< HEAD
<?php
include "Controller/BukuController.php";

$aplikasi =  new BukuController();

$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

switch($request){
    case '/':
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan':
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus':
        $aplikasi->hapus();
        break;
    case '/index.php/edit':
        $aplikasi->edit();
        break;
    case '/index.php/buku/update':
        $aplikasi->update();
        break;
    default:
        $aplikasi->jalankan();
=======
<?php
include "Controller/BukuController.php";

$aplikasi =  new BukuController();

$request = $_SERVER['REQUEST_URI'];
$request = parse_url($request, PHP_URL_PATH);

switch($request){
    case '/':
    case '/index.php':
        $aplikasi->jalankan();
        break;
    case '/index.php/buku/simpan':
        $aplikasi->simpan();
        break;
    case '/index.php/buku/hapus':
        $aplikasi->hapus();
        break;
    case '/index.php/edit':
        $aplikasi->edit();
        break;
    case '/index.php/buku/update':
        $aplikasi->update();
        break;
    default:
        $aplikasi->jalankan();
>>>>>>> 7261bb122a6ea0ae60903bef1aa010b39d3a80b1
}