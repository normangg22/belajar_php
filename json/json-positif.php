<?php
$url = "https://api.kawalcorona.com/";
// Persiapkan curl / init curl
$ch = curl_init();
//set url
curl_setopt($ch, CURLOPT_URL, $url);
// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, $url);
// output contains the output string
$datacovid= curl_exec($ch);
// tutup curl
curl_close($ch);
// menampilkan hasil curl
// echo $dataCovid;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <nav>
            <a herf="json-api.php">Data Covid</a>
            <a herf="json-indonesia.php">Data Indonesia</a>
            <a herf="json-provinsi.php">Data Covid Provinsi</a>
        </nav>
    </center>
    <fieldset>
        <legend>Data Covid</legend>
        <table border=1>
            <?php $data = json_decode($datacovid);?>
            <tr>
                <th><?php echo $data->name; ?></th>
</tr>
            <tr>
                <td><?php echo $data->value; ?></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>