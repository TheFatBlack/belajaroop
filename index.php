<?php

    class Hero
    {
        private $p_nama;
        private $p_health;
        private $p_attack;

        function __construct($a_nama,$a_health,$a_attack)
        {
            $this->p_nama=$a_nama;
            $this->p_health=$a_health;
            $this->p_attack=$a_attack;
        }

        function menyerang_musuh($a_obj)
        {
            echo "$this->p_nama menyerang $a_obj->p_nama<br>";
            $a_obj->p_health=$a_obj->p_health-$this->p_attack;
        }

        function get_health()
        {
            echo "($this->p_nama):($this->p_health)";   
        }

    }

    $hero1=new Hero('Benedetta',100,30);
    
    $hero2=new Hero('Khaleed',100,20);

    $hero1->menyerang_musuh($hero2);
    
    $hero2->get_health();
?>