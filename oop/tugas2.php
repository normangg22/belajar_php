<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><fieldset>
    <legend align="left"><b>TOKO HP KOH AH TONG</b></legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
                <td><b> Nama </b></td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td><b> Alamat </b></td>
                <td>:</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
            <td><b> Agama </b></td>
            <td> : </td>
            <td><select  name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select></td>
        </tr>
            <tr>
                <td><b> Merk HP </b></td>
                <td>:</td>
            <td><select  name="merk" required>
            <option value= "samsung" > samsung</option>
            <option value= "iphone" > iphone.</option>
            <option value= "xiomi" > xiomi</option>
            <option value= "oppo" > oppo</option>
            </select></td>
            </tr>
             <tr>
                <td><b> Model HP </b></td>
                <td> : </td>
            <td><select  name="model">
            <option value= "layar babet" > layar babet</option>
            <option value= "layar sentuh" > layar sentuh.</option>
            <option value= "layar kaca" > layar kaca</option>
            </select></td>
            </tr>
            <tr>
            <td><b> Tanggal Beli </b></td>
            <td> : </td>
            <td><input  type="date" name="tglbeli"></td>
        </tr>
             <tr>
            <td><b> harga </b></td>
            <td> : </td>
            <td><input type="number" name="harga" value="harga" min=1 required></td></tr>
        <tr></td>
            <td><input type="submit" name="input" value="input"></td>
            </tr>
        </form></fieldset>
    </table>
</body>
</html>
<?php
if (isset($_POST['input'])) {
    $harga = $_POST['harga'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $merk = $_POST['merk'];
    $model = $_POST['model'];
    $tglbeli = $_POST['tglbeli'];
    
    class mahas
    {

        public function __construct($harga)
        {

            $this->harga = $harga;
            
        }

    }
    class tugas extends mahas
    {
        public function tug()
        {
            parent::__construct($this->harga);
            if ($this->harga >= 400000) {
                $a = "barang mantap  ";
            } elseif ($this->harga >= 200000) {
                $a = "barang premium";
            } elseif ($this->harga >= 100000) {
                $a = "barang bekas";
            } else {
                $a = "barang kosong";
            }
            return $a;

        }
        public function tu()
        {
            parent::__construct($this->harga);
            if ($this->harga >= 400000) {
                $a = "ORI ";
            } elseif ($this->harga >= 200000) {
                $a = "LOKAL ";
            } elseif ($this->harga >= 100000) {
                $a = " PREMIUM";
            } else {
                $a = " tidak ada barang kw!! ";
            }
            return $a;

        }
    }

    $mahas = new tugas($harga, $nama, $alamat, $merk, $model, $tglbeli);
    ?>
    <table>

    <br><?php echo "nama : " . $nama . "<br>"; ?>
    <br><?php echo "alamat : " . $alamat . "<br>"; ?>
    <br><?php echo "merk : " . $merk . "<br>"; ?>
    <br><?php echo "model : " . $model . "<br>"; ?>
    <br><?php echo "tanggal beli : " . $tglbeli . "<br>"; ?>
    <br><?php echo "status hp : " . $mahas->tu() . "<br>"; ?>
    <br><?php echo "Kualitas hp : " . $mahas->tug() . "<br>"; ?>

</table>
<?php
}
?>