<?php
include("../connect.php");

$sup_no = $_POST['sup_no'];
$sup_company = $_POST['sup_company'];
$sup_contact = $_POST['sup_contact'];
$sup_telephone = $_POST['sup_telephone'];
$sup_email = $_POST['sup_email'];

$sql = "UPDATE suppliers SET 
sup_company = '$sup_company', 
sup_contact = '$sup_contact', 
sup_telephone = '$sup_telephone', 
sup_email = '$sup_email'
WHERE sup_no = '$sup_no'";

if(mysqli_query($connection,$sql)) {
    echo "<script>alert('แก้ไขข้อมูลผู้จัดส่งเรียบร้อย');window.location.href ='supplier_list.php';</script>";
}else {
    echo "<script>alert('ไม่สำเร็จ');window.location.href ='supplier_form.php';</script>";
}
?>
