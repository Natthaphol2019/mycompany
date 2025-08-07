<?php
include("../connect.php");

$item_no = $_POST['item_no'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$location = $_POST['location'];
$qty_on_hand = $_POST['qty_on_hand'];
$reorder_pt = $_POST['reorder_pt'];
$sup_no = $_POST['sup_no'];

if ($_FILES["myfile"]["name"] != "") {
    $image_name = $_FILES["myfile"]["name"];
    $image_type = $_FILES["myfile"]["type"];
    $image_data = mysqli_real_escape_string($connection, file_get_contents($_FILES["myfile"]["tmp_name"]));

    $sql = "UPDATE inventory SET 
        item_name = '$item_name',
        price = $price,
        location = '$location',
        qty_on_hand = $qty_on_hand,
        reorder_pt = $reorder_pt,
        sup_no = '$sup_no',
        image_name = '$image_name',
        image_type = '$image_type',
        image_data = '$image_data'
        WHERE item_no = '$item_no'";
}


if (mysqli_query($connection, $sql)) {
    echo "<script>alert('แก้ไขข้อมูลสินค้าสำเร็จ'); window.location.href = 'inventory_list.php';</script>";
} else {
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้'); window.location.href = 'inventory_form.php';</script>";
}
?>
