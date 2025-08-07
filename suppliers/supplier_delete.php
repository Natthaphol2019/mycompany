<?php
include('../connect.php');

$sup_no = $_GET["sup_no"];
$sql = "DELETE FROM suppliers WHERE sup_no='$sup_no'";
$result = mysqli_query($connection,$sql);

if($result) {
    echo "<script>alert('ลบข้อมูลสำเร็จ');window.location.href = 'supplier_list.php';</script>";
}else{
    echo "<script>alert('มิ้นเป็นเก');window.location.href = 'supplier_list.php';</script>";
}
?>