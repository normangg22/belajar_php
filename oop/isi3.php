<?php 
if (isset($_POST['proses'])) {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
   }
class Aritmatika{
    public function __construct($bilangan1,$bilangan2){
        $this-> bilangan1 = "$bilangan1";
        $this-> bilangan2 = "$bilangan2";
        $tambah =$this-> bilangan1 +$this-> bilangan2;
    }
    public function tambah()
        {
            
            return ($this->bilangan1 + $this->bilangan2 );
        }
        public function kurang()
        {
            
            return ($this->bilangan1 - $this->bilangan2 );
        }
        public function kali()
        {
            
            return ($this->bilangan1 * $this->bilangan2 );
        }
        public function bagi()
        {
            
            return ($this->bilangan1 / $this->bilangan2 );
        }
        public function modulus()
        {
            
            return ($this->bilangan1 % $this->bilangan2 );
        }
        
        
}
$penjumlahan = new aritmatika($bilangan1,$bilangan2);
echo "Bilangan 1: ".$penjumlahan->bilangan1 . "<br>";
echo "Bilangan 2: ".$penjumlahan->bilangan2 . "<br>";
echo"<br>";
echo "Penjumlahan : ".$penjumlahan->tambah()  . "<br>";
echo "Pengurangan : ".$penjumlahan->kurang()  . "<br>";
echo "Perkalian : ".$penjumlahan->kali()  . "<br>";
echo "Pembagian : ".$penjumlahan->bagi()  . "<br>";
echo "Modulus : ".$penjumlahan->modulus()  . "<br>";

?>