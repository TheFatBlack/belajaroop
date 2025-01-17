<?php

include_once "../class/Siswa.php";
require "../vendor/autoload.php";

$siswa=new Siswa();
if($data=$siswa->car_siswa_by_id($_GET['id'])){
    echo "";
}