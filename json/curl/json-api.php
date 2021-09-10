<?php

$url = "https://api.kawalcorona.com/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$datakopit = curl_exec($ch);
curl_close($ch);
// echo $datakopit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA KOPIT -19 </title>
</head>
<body>
    <center>
        <nav>
         <a href="json-api.php"> DATA KOPIT -19 </a>
         <a href="json-indonesia.php">DATA INDONESIA</a>
         <a href="json-provinsi.php">DATA KOPIT-19 PROVINSI</a>
        </nav>
    </center>
    <fieldset>
        <legend>DATA KOPIT-19</legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Negara</th>
                <th>Positif</th>
                <th>Meninggal</th>
                <th>Sembuh</th>
            </tr>
            <?php

            $no=1;
            $data = json_decode($datakopit);
            foreach ($data as $kopit) {            
            ?>

            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $kopit->attributes->Country_Region; ?></td>
                <td><?php echo $kopit->attributes->Confirmed;  ?></td>
                <td><?php echo $kopit->attributes->Deaths; ?></td>
                <td><?php echo $kopit->attributes->Recovered; ?></td>
            </tr>
            <?php } ?>
        </table>
    </fieldset>
</body>
</html>