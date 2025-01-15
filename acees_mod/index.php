<?php

class HeroMl
{
    private $P_nama;
    private $P_health;
    private $P_attack;

    public function set_status($a_nama,$a_health,$a_attack)
    {
        $this->P_nama=$a_nama;
        $this->P_health=$a_health;
        $this->P_attack=$a_attack;
    }
    public function getStatus()
    {
        echo "Hero $this->P_nama<br>";
        echo "Health $this->P_health<br>";
        echo "attack $this->P_attack";
    }
}

$hero3=new HeroMl();
$hero3->set_status('Hilda',100,35);
$hero3->getStatus();