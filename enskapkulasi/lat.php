<?php

class stadion
{
    public $barat = "100 bangku";
    protected $timur = "90 bangku";
    private $vip = "1 bangku";

    public function barat()
    {
        return $this->barat;
    }
    public function vip()
    {
        return $this->vip;
    }
}
class bangku extends stadion
{
    public function barat()
    {
        return $this->barat;
    }

}

$stadion = new stadion();
$bangku = new bangku();


echo "Jumlah bangku di barat: " . $stadion->barat() . "<br>";
echo "Jumlah bangku vip : " . $stadion->vip() . "<br>";

