<?php
//Database connection info
$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => ''
    'db'   => 'pertemuan13'
);

//DB table to use
$table = 'tma';

//Table's primary key
$primaryKey = 'id_tma';

$colums = array(
    array('db' => 'id_tma', 'dt' =>0),
    array('db' => 'nilai','dt'=>1),
    array('db' => 'waktu', 'dt'=>2),
);
require 'ssp.class.php';

echo json_encode(
    SSP::simple($_GET, $dbDetails, $table, $primaryKey, $colums)

);

