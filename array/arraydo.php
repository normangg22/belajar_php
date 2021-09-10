<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Rafli Nur Barokah",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Inggris"],
            ["MataKuliah" => "Bahasa Indonesia"]],

            "Hobi" => [
            ["Hobi" => "Riding"],
            ["Hobi" => "Traveling"]]],

            [ "nama" =>
             "Raihan Ramadan",
            "MataKuliah" => [
            ["MataKuliah" => "Ilmu Pengetahuan Alam"],
            ["MataKuliah" => "Ilmu Pengetahuan Sosial"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Riding"],
            ["Hobi" => "Bermain"]]],

            [ "nama" => "Alvin Mohammad",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "Riding"],
            ["Hobi" => "Bermain Billiar"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Valerian",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Inggris"],
            ["MataKuliah" => "Bahasa Indonesia"]],

            "Hobi" => [
            ["Hobi" => "Riding"],
            ["Hobi" => "Futsal"]]],

            [ "nama" =>
             "Ramadan Aliansah",
            "MataKuliah" => [
            ["MataKuliah" => "Bahasa indonesia"],
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Riding"],
            ["Hobi" => "Berkuda"]]],

            [ "nama" => "Dika Hardiansyah",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "Riding"],
            ["Hobi" => "Bermain Golf"]]],
        ]
        ],
    ];
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
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "". $hobi['Hobi']. "";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>