<?php

class koneksi{
    private $P_host="localhost";
    private $P_username="root";
    private $P_password="";
    private $P_database="latihan_oop";
    protected $P_koneksi;

    public function __construct()
    {
        $this->P_koneksi=new mysqli
        ($this->P_host,$this->P_username,
        $this->P_password,$this->P_database);
    }

    public function cek_koneksi()
    {
        if ($this->P_koneksi)
        echo "Koneksi berhasil";
    }
}