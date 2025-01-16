<?php

include_once "koneksi.php";

class Siswa extends koneksi{
    public function tambah_data_siswa($a_nama,$a_nisn,$a_kelas)
    {
        $query="INSERT INTO siswa SET 
        nama='$a_nama',nisn='$a_nisn',kelas='$a_kelas'";
        $this->P_koneksi->query($query);
    }

    public function tampil_data_siswa_all()
    {
        $query="SELECT*FROM siswa";
        $hasil=$this->P_koneksi->query($query);
        $data=array();
        while ($baris=$hasil->fetch_assoc())
        {
         $data[]=$baris;    
        }
        return $data;
    }
}