<?php

require_once "Orang.php";

class OrangInggris extends OrangBiasa{

    // Override
    public function ucapSalam()
    {
        echo "Hello my name is " . $this->nama . "<br>";
    }
}