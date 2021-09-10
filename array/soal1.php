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
        <legend>Input Array</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Masukan Jumlah Data : </th>
                    <td><input type="number" name="jumlah" id="" required></td>
                </tr>
                <tr>
                    <th></th>
                    <td><button type="submit" name="Simpan">Simpan</button>
                        <button type="reset" name="Reset">Reset</button></td>
                </tr>
            </table>
        </form>
    </fieldset>

    <?php
        if (isset($_POST['Simpan'])) {
            $row = $_POST['jumlah'];
    ?>

    <fieldset>
        <legend>Input data Siswa</legend>
        <table>
            <form action="soal1pro.php" method="post">
            <?php
                for ($i = 1; $i <= $row; $i++){
            ?>
            <tr>
                <th colspan=2>Data Ke <?php echo $i; ?></th>
                <td>Nama</td>
                <td><input type="text" name="nama[]" id="" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <td>Asal sekolah</td>
                <td><input type="text" name="asalsekolah[]" id="" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <td>Nilai bahasa indonesia</td>
                <td><input type="number" name="indonesia[]" min="1 " max = "100" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <td>Nilai matematika</td>
                <td><input type="number" name="matematika[]"min="1 " max = "100" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <td>Nilai bahasa inggris</td>
                <td><input type="number" name="inggris[]"min="1 " max = "100" required></td>
            </tr>
            <tr>
                <th colspan=2></th>
                <td>Nilai IPA</td>
                <td><input type="number" name="ipa[]" min="1 " max = "100" required></td>
            </tr>
            <?php } ?>
            <tr>
                <th></th>
                <td><button type="submit" name="save">Simpan</button>
                <button type="reset" name="Reset">Reset</button></td></td>
            </tr>
            </form>
        </table>
    </fieldset>
    <?php } ?>

</body>
</html>