<?php
require_once realpath(__DIR__ . '/../../classes/database.php');

$db = new Database();
$data = $db->getAll("data_barang");
?>

<h2>Daftar Barang</h2>
<a href="?page=user/add">+ Tambah Barang</a>
<br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Kategori</th>
    <th>Nama</th>
    <th>Gambar</th>
    <th>Harga Beli</th>
    <th>Harga Jual</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php while($row = $data->fetch_assoc()) { ?>
<tr>
    <td><?= $row['id_barang'] ?></td>
    <td><?= $row['kategori'] ?></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['gambar'] ?></td>
    <td><?= $row['harga_beli'] ?></td>
    <td><?= $row['harga_jual'] ?></td>
    <td><?= $row['stok'] ?></td>
    <td>
        <a href="?page=user/edit&id=<?= $row['id_barang'] ?>">Edit</a> |
        <a href="?page=user/delete&id=<?= $row['id_barang'] ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>
