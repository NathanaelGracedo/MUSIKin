<?php
$serverName = "NATHANAEL"; // atau nama server SQL Anda
$connectionOptions = array("Database" => "MUSIKIN", "UID" => "", "PWD" => "");
$conn = sqlsrv_connect($serverName, $connectionOptions);
if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}
?>