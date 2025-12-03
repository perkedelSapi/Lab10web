<?php
require_once realpath(__DIR__ . '/../../classes/database.php');

$db = new Database();
$id = $_GET['id'];

$barang = $db->getById("data_barang", "id_barang=$id");
?>

<h2>Edit Barang</h2>

<form action="?page=user/proses_edit" method="POST">
    <input type="hidden" name="id" value="<?= $barang['id_barang'] ?>">

    Kategori : <input type="text" name="kategori" value="<?= $barang['kategori'] ?>"><br><br>
    Nama : <input type="text" name="nama" value="<?= $barang['nama'] ?>"><br><br>
    Gambar : <input type="text" name="gambar" value="<?= $barang['gambar'] ?>"><br><br>
    Harga Beli : <input type="text" name="harga_beli" value="<?= $barang['harga_beli'] ?>"><br><br>
    Harga Jual : <input type="text" name="harga_jual" value="<?= $barang['harga_jual'] ?>"><br><br>
    Stok : <input type="text" name="stok" value="<?= $barang['stok'] ?>"><br><br>

    <input type="submit" value="Update">
</form>
