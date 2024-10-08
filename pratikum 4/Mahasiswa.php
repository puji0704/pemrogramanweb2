<?php

require_once "Orang.php";
require_once "Nilai.php";

class Mahasiswa extends Orang{
    protected $Nim;
    protected Nilai $nilai;

    public function setNim($nim){
        $this->Nim = $nim;
    }
    
    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function getNim(){
        return $this->Nim;
    }

    public function getNilai(){
        return $this->nilai;
    }

    public function tampilkanData(){
        echo "Nama :" . $this->nama . "<br>";
        echo "NIM :" . $this->Nim . "<br>";
        echo "Nilai Tugas :" . $this->nilai->getTugas() . "<br>";
        echo "Nilai UTS :" . $this->nilai->getUts() . "<br>";
        echo "Nilai UAS :" . $this->nilai->getUas() . "<br>";
    }

}