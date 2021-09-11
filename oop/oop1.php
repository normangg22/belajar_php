<?php
{
    class Kucing
    {
        public $warna = "coklat";
        public $kaki = 4;
        public $bulu = "panjang";
        public $makanan = "ikan";
        

        public function bersuara()
        {
            return "meow";
        }
        public function berburu()
        {
            return "berburu ikna";
        }

    }
    $kucing1 = new Kucing();
    echo $kucing1->warna."<br>";
    echo $kucing1->bersuara()."<hr>";

    $kucing2 = new Kucing();
    $kucing2->warna = "oren";
    echo $kucing2->warna."<br>";
    echo $kucing2->bersuara()."<hr>";
}