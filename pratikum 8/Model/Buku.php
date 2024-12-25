<?php

class Buku{
<<<<<<< HEAD
    protected $id; //+
=======
    protected $id;
>>>>>>> 7261bb122a6ea0ae60903bef1aa010b39d3a80b1
    protected $judul ;
    protected $pengarang ;
    protected $penerbit ;
    protected $tahun ;

    public function __construct($judul , $pengarang , $penerbit , $tahun )
    {

        $this->judul = $judul ;
        $this->pengarang = $pengarang ;
        $this->penerbit = $penerbit ;
        $this->tahun = $tahun ;
    }
<<<<<<< HEAD
    public function setId($id){//+
        $this->id = $id ;
        
    }
    public function getId(){//+
=======

    public function setId($id){
        $this->id = $id ;
        
    }
    public function getId(){
>>>>>>> 7261bb122a6ea0ae60903bef1aa010b39d3a80b1
        return $this->id;
    }

    public function getJudul(){
        return $this->judul ;
    }

    public function getPengarang(){
        return $this->pengarang ;
    }

    public function getPenerbit(){
        return $this->penerbit ;
    }

    public function getTahun(){
        return $this->tahun ;
    }
}