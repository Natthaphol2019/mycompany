<?php
include("../connect.php");

$cust_no = $_POST['cust_no'];
$cust_name = $_POST['cust_name'];
$cust_street = $_POST['cust_street'];
$cust_city = $_POST['cust_city'];
$cust_state = $_POST['cust_state'];
$cust_zip = $_POST['cust_zip'];
$ship_to_name = $_POST['ship_to_name'];
$ship_to_street = $_POST['ship_to_street'];
$ship_to_city = $_POST['ship_to_city'];
$ship_to_state = $_POST['ship_to_state'];
$ship_to_zip = $_POST['ship_to_zip'];
$credit_limit = $_POST['credit_limit'];
$last_revised = $_POST['last_revised'];
$credit_terms = $_POST['credit_terms'];
if ($_FILES["myfile"]["name"] != "") {
    $image_name = $_FILES["myfile"]["name"];
    $image_type = $_FILES["myfile"]["type"];
    $image_data = mysqli_real_escape_string($connection, file_get_contents($_FILES["myfile"]["tmp_name"]));

    $sql = "UPDATE customers SET 
    cust_name = '$cust_name',
    cust_street = '$cust_street',
    cust_city = '$cust_city',
    cust_state = '$cust_state',
    cust_zip = '$cust_zip',
    ship_to_name = '$ship_to_name',
    ship_to_street = '$ship_to_street',
    ship_to_city = '$ship_to_city',
    ship_to_state = '$ship_to_state',
    ship_to_zip = '$ship_to_zip',
    credit_limit = '$credit_limit',
    last_revised = '$last_revised',
    credit_terms = '$credit_terms',
    image_name = '$image_name',
        image_type = '$image_type',
        image_data = '$image_data'
WHERE cust_no = '$cust_no'";
}
if (mysqli_query($connection, $sql)) {
    echo "<script>alert('อัปเดตข้อมูลลูกค้าเรียบร้อยแล้ว'); window.location='customer_list.php';</script>";
} else {
    echo "<script>alert('เกิดข้อผิดพลาดในการอัปเดต'); history.back();</script>";
}
?>