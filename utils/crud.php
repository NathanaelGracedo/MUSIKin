<?php
function createItem(string $nama_barang, int $harga, int $stok, string $deskripsi, string $gambar): void
{
    $koneksi = connectToDB();
    $sintaks_sql = `INSERT INTO ...`;
    $parameter = [$nama_barang, $harga, $stok, $deskripsi, $gambar];
    $query = sqlsrv_query($koneksi, $sintaks_sql,  $parameter);

    if ($query === false || !$query) die(print_r(sqlsrv_errors(), true));
    echo "Barang berhasil dibuat!";
    sqlsrv_close($koneksi);
}

function getItem(): void {}

function updateItem(): void {}

function deleteItem(int $id): void {
    $koneksi = connectToDB();
    $sintaks_sql = `DELETE FROM ...`;
    $paramater = [$id];
    $query = sqlsrv_query($koneksi, $sintaks_sql, $paramater);

    if ($query === false || !$query) die(print_r(sqlsrv_errors(), true));
    echo "Barang dihapus.";
    sqlsrv_close($koneksi);
}