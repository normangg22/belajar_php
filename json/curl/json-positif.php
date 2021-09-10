<?php

$url = "https://api.kawalcorona.com/positif/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$datakopit = curl_exec($ch);
echo $datakopit
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA KOPIT-19</title>
</head>
<body>
    <center>
        <nav>
            <a href="json-api.php">DATA KOPIT</a> |
            <a href="json-indoneisa.php">DATA INDONESIA</a> |
            <a href="json-provinsi.php">DATA PROVINSI</a> |
        </nav>
    </center>
    <fieldset>
        <table border=1>
            <?php $data = json_decode($datakopit);?> 
            <tr>
                <th><?php echo $data->name; ?></th>
            </tr>
            <tr>
                <th><?php echo $data->value; ?></th>
            </tr>

        </table>
    </fieldset>
</body>
</html>