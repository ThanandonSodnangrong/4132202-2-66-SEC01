<?php
require_once "condb.php";


$id = $_POST['id'];
$name = $_POST['name'];
$prov = $_POST['prov'];

try{
  echo $sql = "UPDATE tb_member SET `name`='$name', id_province='$prov' WHERE id_member='$id'";
    mysqli_query($conn, $sql);
}catch (Exception $e) {
    echo "Error";
}
