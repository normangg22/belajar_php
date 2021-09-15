<?php
class Rumah {
  
  Public $Pintu = 4;
  Private $Wc = 2;
}

class perumahan extends Rumah{
 
  Public $Pintu = 5;
} 

$Griya = new perumahan();
$rumahku = new Rumah();

echo $rumahku->Pintu.'<br>';
echo $Griya->Pintu.'<br>';

if(property_exists($rumahku,'Wc')){
  echo "Rumahku Ini Mempunyai WC<br>";
}
else {
  echo "Rumah Ini Tidak Mempunyai WC<br>";
}

if(property_exists($Griya,'Wc')){
  echo "Griya ini Mempunyai Wc<br>";  
}
else {
  echo "Griya Ini Tidak Mempunyai WC<br>";
}
?>