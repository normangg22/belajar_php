<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><fieldset>
    <legend align="left"><b>MAHASISWA</b></legend>
    <table>
        <form action=" " method="POST" name="input">
            <tr>
                <td><b> Nama </b></td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td><b> NIM </b></td>
                <td>:</td>
                <td><input type="text" name="nim" required></td>
            </tr>
            <tr>
                <td><b> Nama Dosen </b></td>
                <td>:</td>
                <td><input type="text" name="dosen" required></td>
            </tr>
             <tr>
                <td><b> Mata Kuliah </b></td>
                <td>:</td>
                <td><input type="text" name="matkul" required></td>
            </tr>
             <tr>
            <td><b> nilai </b></td>
            <td> : </td>
            <td><input type="number" name="jenis" value="jenis" max=100 min=1 required></td></tr>
        <tr></td>
            <td><input type="submit" name="input" value="input"></td>
            </tr>
        </form></fieldset>
    </table>
</body>
</html>
<?php
if (isset($_POST['input'])) {
    $jenis = $_POST['jenis'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $dosen = $_POST['dosen'];
    $matkul = $_POST['matkul'];

    class mahas
    {

        public function __construct($jenis)
        {

            $this->jenis = $jenis;
            
        }

    }
    class tugas extends mahas
    {
        public function tug()
        {
            parent::__construct($this->jenis);
            if ($this->jenis >= 85) {
                $a = "lulus  ";
            } elseif ($this->jenis >= 75) {
                $a = "lulus";
            } elseif ($this->jenis >= 65) {
                $a = "perbaiki";
            } else {
                $a = "tidak lulus";
            }
            return $a;

        }
        public function tu()
        {
            parent::__construct($this->jenis);
            if ($this->jenis >= 85) {
                $a = "A ";
            } elseif ($this->jenis >= 75) {
                $a = "B ";
            } elseif ($this->jenis >= 65) {
                $a = " C";
            } else {
                $a = " E ";
            }
            return $a;

        }
    }

    $mahas = new tugas($jenis, $nama, $nim, $dosen, $matkul);
    ?>
    <table>

    <br><?php echo "nama : " . $nama . "<br>"; ?>
    <br><?php echo "nim : " . $nim . "<br>"; ?>
    <br><?php echo "dosen : " . $dosen . "<br>"; ?>
    <br><?php echo "matkul : " . $matkul . "<br>"; ?>
    <br><?php echo "status : " . $mahas->tu() . "<br>"; ?>
    <br><?php echo "nilai : " . $mahas->tug() . "<br>"; ?>

</table>
<?php
}
?>