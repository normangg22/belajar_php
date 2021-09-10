<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td><input type="radio" name="jk" value="laki-laki" required> Laki-laki
                <input type="radio" name="jk" value="perempuan" required> Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal lahir : </td>
                <td><input type="date" name="date" required></td>
            </tr>
            <tr>
                <td>Agama :</td>
                <td>
                <select name="agama" required>
                            <option value="">Pilih agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">Konghucu</option>
                            <option value="atheis">Atheis</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td>
                    <textarea name="alamat" cols="20" rows="5" required></textarea>
                </td>
            </tr>
            <tr>
                <td>Hobi : </td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Basket">Basket<br>
                    <input type="checkbox" name="hobi[]" value="Bola">Bola<br>
                    <input type="checkbox" name="hobi[]" value="Skate">Skate<br>
                    <input type="checkbox" name="hobi[]" value="Berenang">Berenang <br>
                    <input type="checkbox" name="hobi[]" value="Catur">Catur<br>
                    <input type="checkbox" name="hobi[]" value="PS">PS<br>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="submit">
                    <input type="reset" name="reset">
                </td>
            </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $hobi = $_POST['hobi'];
    function biodata($nama, $jk, $tl, $agama, $alamat, $hobi) {
        echo "Nama : $nama <br>";
        echo "Jenis Kelamin : $jk <br>";
        echo "tanggal lahir : $tl<br>";
        echo "Agama : $agama <br>";
        echo "Alamat : $alamat <br>";
        echo "Hobi :";
        foreach ($hobi as $saya){
            echo "<li>".$saya."</li>";
        }
    }
    echo biodata($_POST['nama'], $_POST['jk'], $_POST['date'], $_POST['agama'], $_POST['alamat'],$hobi );

}

?>