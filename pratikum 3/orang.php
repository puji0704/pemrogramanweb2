<?php
class orang{
    public $nama;

    public function __construct($nama)
    {
        $this->nama =$nama;
    }

    public function ucapsalam(){
        echo "Hello nama saya " .$this->nama . "<br>";
    }
}