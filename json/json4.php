<?php

$dataMhs = '[
  { "nama": "Mahmud","domisili":"Bandung" },
  { "nama": "Udin","domisili":"Tasik" },
  { "nama": "Enceng","domisili":"Majalaya" },
  { "nama": "Entis","domisili":"Ciamis" }
]';

$data = json_decode($dataMhs);

foreach ($data as $mhs) {
  echo "Nama : " . $mhs->nama . "<br>";
  echo "Domisili : " . $mhs->domisili;
  echo "<hr>";
}