<?php 
include "orang.php";

class mahasiswa extends orang{
    public $nim;
    public $prodi;

    public function getnilaisemester(){

    }

}

class mahasiswaasing extends mahasiswa{
    //override
    public function ucapsalam(){
        echo "Hello my name " . $this->nama . "<br>";
    }
}