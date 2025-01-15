<?php

class Character
{
    protected $P_nama;

    public function set_nama($a_nama)
    {
        $this->P_nama=$a_nama;
    }
    public function get_nama()
    {
        echo "$this->P_nama<br>";
    }
}