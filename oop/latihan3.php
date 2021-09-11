<?php
{
    class persegi{
        public $sisi= 5;

        public function luas(){
            return ($this->sisi * $this->sisi);
        }
        public function keliling(){
        return pow($this->sisi,3);
    }
}

$persegi1 = new persegi();
echo "sisi : ". $persegi1->sisi."<br>";
echo "luas persegi : ". $persegi1->luas()."<br>";
echo "keliling persegi : ". $persegi1->keliling()."<br>";
}
?>