<?php

$dataMhs = '[
  { "nama": "Mahmud","domisili":"Bandung" },
  { "nama": "Udin","domisili":"Tasik" },
  { "nama": "Enceng","domisili":"Majalaya" },
  { "nama": "Entis","domisili":"Ciamis" }
]';

$data = json_decode($dataMhs);

echo json_encode($data);
