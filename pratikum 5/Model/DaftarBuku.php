<?php

require_once "Buku.php";

class DaftarBuku{

    public function getData(){
        $daftar_buku = array(
            new Buku('Belajar premrograman web', 'Emely w.', 'informatika', '2024'),
            new BUKU('Matematika Diskrit', 'Rinaldi Munir', 'Andi Publisher', '2020'),
            new Buku('kalkulus', 'Robert T.', 'Erlangga' , '2019'),
            new Buku('Metodologi Penelitian', 'James W.', 'Pustaka UIN', '2024'),
            
        );

        return $daftar_buku;

    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');

    }
}