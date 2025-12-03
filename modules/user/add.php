<?php
require_once realpath(__DIR__ . '/../../classes/form.php');

$form = new Form("?page=user/proses_add", "Simpan");

$form->addField("kategori", "Kategori");
$form->addField("nama", "Nama");
$form->addField("gambar", "Nama File Gambar");
$form->addField("harga_beli", "Harga Beli");
$form->addField("harga_jual", "Harga Jual");
$form->addField("stok", "Stok");

echo "<h2>Tambah Data Barang</h2>";
$form->display();
?>
