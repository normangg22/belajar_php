<?php
{
    class segitiga{
        public $setengah = 0.5;
        public $alas = 20.0;
        public $tinggi = 30.0;
        public $a,$b,$c;

        public function hitungLuas()
        {
            return (0.5 * $this->alas * $this->tinggi);
        }
      
        
        public function keliling()
        {
            return ( $this->a + $this->b + $this->c);
        }
      
       
    }

    $luasSegitiga = new segitiga();
    $luasSegitiga->a = 10;
    $luasSegitiga->b = 20;
    $luasSegitiga->c = 15;
    echo "Setengah : " .$luasSegitiga->setengah. "<br>";
    echo "Alas : " .$luasSegitiga->alas. "<br>";
    echo "Tinggi : " .$luasSegitiga->tinggi. "<br>";
    echo "Sisi A : " . $luasSegitiga->a. "<br>";
    echo "Sisi B : " . $luasSegitiga->b. "<br>";
    echo "Sisi C : " . $luasSegitiga->c. "<br>";
    echo "Luas Segitiga : " .$luasSegitiga->hitungLuas(). "<br>";
    echo "Keliling Segitiga : " .$luasSegitiga->keliling(). "<br>";
   
}
?>