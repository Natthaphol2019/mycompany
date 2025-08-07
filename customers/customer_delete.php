<?php
include('../connect.php');

$cust_no = $_GET["cust_no"];
$sql = "DELETE FROM customers WHERE cust_no='$cust_no'";
$result = mysqli_query($connection,$sql);

if($result) {
    echo "<script>alert('ลบข้อมูลสำเร็จ');window.location.href = 'customer_list.php';</script>";
}else{
    echo "<script>alert('มิ้นเป็นเก');window.location.href = 'customer_list.php';</script>";
}
?>