<?php
include("../connect.php");

$sql = "SELECT sup_no FROM suppliers ORDER BY sup_no DESC LIMIT 1";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    $last_sup_no = $row['sup_no'];
    $last_number = substr($last_sup_no, 1);
    $next_number = str_pad($last_number + 1, 3, '0', STR_PAD_LEFT);
    $next_sup_no = 'S' . $next_number;
} else {
    $next_sup_no = 'S001';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าเพิ่มข้อมูลผู้จัดส่ง</title>
</head>
<body>
    <form action="supplier_insert.php" method="post">
        sup_no <br>
        <input type="text" name="sup_no" id="" value="<?php echo $next_sup_no; ?>" readonly><br>
        sup_company <br>
        <input type="text" name="sup_company" id="" autocomplete="off"><br>
        sup_contact <br>
        <input type="text" name="sup_contact" id=""  autocomplete="off"><br>
        sup_telephone <br>
        <input type="text" name="sup_telephone" id="" autocomplete="off"><br>
        sup_email <br>
        <input type="text" name="sup_email" id="" autocomplete="off"><br>

        <input type="submit" value="ยืนยัน"> | <input type="reset" value="ล้างข้อมูล">
    </form>
</body>
</html>