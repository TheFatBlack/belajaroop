<?php

include "Character.php";

class Sniper extends Character
{
    public function get_nama()
    {
        echo "$this->P_nama";
    }
}