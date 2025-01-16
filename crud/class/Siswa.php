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
    
    public function hapus_data_siswa($a_id)
    {
        $query="DELETE FROM siswa where id='$a_id'";
        $this->P_koneksi->query($query);
    }

    public function cari_siswa_by_id($a_id){
        $query="SELECT * FROM siswa WHERE id='$a_id'";
        $data=$this->P_koneksi->query($query);
        return $data->fetch_assoc();
    }

    public function update_data_siswa($a_id,$a_nama,$a_nisn,$a_kelas){
        $query="UPDATE siswa SET nama='$a_nama',nisn='$a_nisn',kelas='$a_kelas' WHERE id='$a_id'";
        $this->P_koneksi->query($query);
    }
}