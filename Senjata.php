<?php

    class Senjata
    {
        private $p_senjata;
        private $p_modelamunisi;
        private $p_ukuranamunisi;

        function __construct($a_senjata,$a_modelamunisi,$a_ukuranamunisi)
        {
            $this->p_senjata=$a_senjata;
            $this->p_modelamunisi=$a_modelamunisi;
            $this->p_ukuranamunisi=$a_ukuranamunisi;
        }

        function __destruct()
        {
            echo "senjata $this->p_senjata berhasil dibuat <br>";
        }
        function getSenjata()
        {
            echo $this->p_senjata."<br>";
        }
    }

    $senjata2=new Senjata('Uzi','SMG Ammo',10);
    
    $senjata1=new Senjata('Ak47','AR Ammo',17);
?>