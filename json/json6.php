<?php
    $dataMhs = '[
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "Norman",
            "MataKuliah" => [["MataKuliah" => "Matematika"],["MataKuliah" => "IPA"],["MataKuliah" => "IPS"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "UfC"]]],

            [ "nama" => "Hasan",
            "MataKuliah" => [["MataKuliah" => "PPKN"],["MataKuliah" => "Sejarah"],["MataKuliah" => "KWU"]],
            "Hobi" => [["Hobi" => "Bermain"],["Hobi" => "Badminton"]]],

            [ "nama" => "Coki",
            "MataKuliah" => [["MataKuliah" => "RPL"],["MataKuliah" => "Manajemen"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Futsal"],["Hobi" => "Basket"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "Winaf",
            "MataKuliah" => [["MataKuliah" => "Matematika"],["MataKuliah" => "IPA"],["MataKuliah" => "IPS"]],
            "Hobi" => [["Hobi" => "Renang"],["Hobi" => "Bermain musik"]]],

            [ "nama" => "Coki",
            "MataKuliah" => [["MataKuliah" => "PPKN"],["MataKuliah" => "Sejarah"],["MataKuliah" => "KWU"]],
            "Hobi" => [["Hobi" => "Traveling"],["Hobi" => "Bermain"]]],

            [ "nama" => "Rio",
            "MataKuliah" => [["MataKuliah" => "RPL"],["MataKuliah" => "Manajemen"],["MataKuliah" => "Administrasi"]],
            "Hobi" => [["Hobi" => "Futsal"],["Hobi" => "Berenang"]]],
        ]';
        
    
   

echo json_encode($dataMhs);