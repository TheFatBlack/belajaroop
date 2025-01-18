<?php

include_once "../class/Siswa.php";
require "../vendor/autoload.php";

$siswa=new Siswa();
if($data=$siswa->car_siswa_by_unik_id($_GET['unik_id'])){
    echo "";
}