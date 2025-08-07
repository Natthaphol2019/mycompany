<?php
include('../connect.php');

$item_no = $_GET["item_no"];
$sql = "DELETE FROM inventory WHERE item_no='$item_no'";
$result = mysqli_query($connection,$sql);

if($result) {
    echo "<script>alert('ลบข้อมูลสำเร็จ');window.location.href = 'inventory_list.php';</script>";
}else{
    echo "<script>alert('มิ้นเป็นเก');window.location.href = 'inventory_list.php';</script>";
}
?>