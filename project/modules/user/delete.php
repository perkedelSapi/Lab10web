<?php
require_once realpath(__DIR__ . '/../../classes/database.php');

$id = $_GET['id'];

$db = new Database();
$db->delete("data_barang", "id_barang=$id");

header("Location: ?page=user/list");
?>
