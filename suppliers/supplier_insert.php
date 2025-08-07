<?php
include("../connect.php");

$sup_no = $_POST['sup_no'];
$sup_company = $_POST['sup_company'];
$sup_contact = $_POST['sup_contact'];
$sup_telephone = $_POST['sup_telephone'];
$sup_email = $_POST['sup_email'];


$sql = "INSERT INTO suppliers (sup_no,sup_company,sup_contact,sup_telephone,sup_email)
VALUES ('$sup_no','$sup_company','$sup_contact','$sup_telephone','$sup_email')";

if(mysqli_query($connection,$sql)) {
    echo "<script>alert('บันทึกผู้จัดส่งเรียบร้อย');window.location.href ='supplier_list.php';</script>";
}else {
    echo "<script>alert('เพิ่มไม่สำเร็จ');window.location.href ='supplier_form.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>