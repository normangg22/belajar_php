<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <table>
            <form action="" method="post">
            <tr>
                <td>Kaki Kucing</td>
                <td> : </td>
                <td><input type="number" name="kaki" min="3" max="5">   </td>
            </tr>
            <tr>
                <td>Warna Kucing </td>
                <td> : </td>
                <td><input type="text" name="warna"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan" name="simpan"></td>
            </tr>
            </form>
        </table>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $kaki = $_POST['kaki'];
    $warna = $_POST['warna'];
}
class kucing
{
    public $kaki;
    public $warna;

    public function sampean($warna, $kaki)
    {
        if ($kaki == 4) {
            echo "Warna Kucing : " . $warna . "<br>";
            echo "Memiliki Kaki : " . $kaki . " Cingked";
        } else if ($kaki == 3) {
            echo "Warna Kucing : " . $warna . "<br>";
            echo "Memiliki Kaki : " . $kaki . " Siluman";
        } else if ($kaki == 5) {
            echo "Warna Kucing : " . $warna . "<br>";
            echo "Memiliki Kaki : " . $kaki . " Siluman";
        }

    }

}
$kucing = new kucing();

echo $kucing->sampean($warna, $kaki);

?>