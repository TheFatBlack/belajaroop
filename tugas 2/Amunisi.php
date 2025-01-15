<?php

include "Prajurit.php";

class Amunisi extends Prajurit
{
    protected $P_modelsenjata;
    protected $P_amunisi;
    
    public function get_nama()
    {
        echo "$this->P_nama";
    }
}