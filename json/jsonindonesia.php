<?php

$url = "https://api.kawalcorona.com/indonesia/";
//persiapan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
//eturn the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$dataCovid = curl_exec($ch);
//tutup curl
curl_close($ch);
//menampilkan hasil curl
//echo $output;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Indonesia</title>
</head>
<body>
    <center>
    <nav>
        <a href="jsonapi.php">Data Covid</a>
        <a href="jsonindonesia.php">Data Covid Indonesia</a>
        <a href="jsonprovinsi.php">Data Covid Provinsi</a>
        <a href="jsonpositif.php">Data Covid Positif</a>
        <a href="jsonmeninggal.php">Data Covid Meninggal</a>
    </nav>
    </center>
    <fieldset>
        <legend>Data Covid Indonesia</legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Negara</th>
                <th>Positif</th>
                <th>Meninggal</th>
                <th>Sembuh</th>
                <th>Dirawat</th>
            </tr>
            <?php
            $no = 1;
            $data = json_decode($dataCovid);
            foreach ($data as $covid) {?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $covid->name; ?></td>
                <td><?php echo $covid->positif;?></td>
                <td><?php echo $covid->meninggal;?></td>
                <td><?php echo $covid->sembuh;?></td>
                <td><?php echo $covid->dirawat;?></td>
            </tr>
            <?php }?>
        </table>
    </fieldset>
</body>
</html>