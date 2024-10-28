<?php
function connectToDB()
{
    $koneksi = sqlsrv_connect("NATHANAEL", array("Database" => "MUSIKIN", "UID" => "", "PWD" => ""));
    if ($koneksi === false || !$koneksi) die("Connection failed: " . print_r(sqlsrv_errors(), true));
    echo "Connection established!";
}