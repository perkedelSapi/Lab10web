<?php
require_once realpath(__DIR__ . '/../../classes/database.php');

$db = new Database();

$data = [
    "kategori"   => $_POST['kategori'],
    "nama"       => $_POST['nama'],
    "gambar"     => $_POST['gambar'],
    "harga_beli" => $_POST['harga_beli'],
    "harga_jual" => $_POST['harga_jual'],
    "stok"       => $_POST['stok']
];

$db->insert("data_barang", $data);

header("Location: ?page=user/list");
?>
