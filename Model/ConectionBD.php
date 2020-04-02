<?php

require_once("../init.php");

class ConectionBD
{
    protected $mysqli;

    public function __construct(){
        $this->conection();
    }

    private function conection(){
        $this->mysqli = new mysqli(BD_SERVER, BD_USER , BD_PASSWORD, BD_NAME);
    }

    public function getInstance()
    {
        return $this->mysqli;

    }
}