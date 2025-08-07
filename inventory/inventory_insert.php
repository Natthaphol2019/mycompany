<?php
include("../connect.php");

$item_no = $_POST['item_no'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$location = $_POST['location'];
$qty_on_hand = $_POST['qty_on_hand'];
$reorder_pt = $_POST['reorder_pt'];
$sup_no = $_POST['sup_no'];
$image_name = $_FILES["myfile"]["name"];
$image_type = $_FILES["myfile"]["type"];
if ($_FILES["myfile"]["error"] != 0) {
    echo "เกิดข้อผิดพลาดในการอัพโหลดไฟล์";
    exit();
}

if($image_name != ""){
$image_data = mysqli_real_escape_string($connection, file_get_contents($_FILES["myfile"]["tmp_name"]));
}else {
    $image_data = "";
}
$sql = "INSERT INTO inventory (item_no, item_name, price, location, qty_on_hand, reorder_pt, sup_no, image_name, image_type, image_data)
        VALUES ('$item_no', '$item_name', '$price', '$location', '$qty_on_hand', '$reorder_pt', '$sup_no', '$image_name', '$image_type', '$image_data')";

if (mysqli_query($connection, $sql)) {
    echo "<script>alert('บันทึกสินค้าเรียบร้อย');window.location.href ='inventory_list.php';</script>";
} else {
    echo "<script>alert('เพิ่มไม่สำเร็จ');window.location.href ='inventory_form.php';</script>";
}
?>