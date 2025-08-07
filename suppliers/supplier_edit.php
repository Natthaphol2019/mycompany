<?php

include('../connect.php');
$sup_no = $_GET['sup_no'];

$sql ="SELECT * FROM suppliers WHERE sup_no='$sup_no'";
$result = mysqli_query($connection,$sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="supplier_update.php" method="post">
        sup_no <br>
        <input type="hidden" name="sup_no" value="<?php echo $row['sup_no'];?>" id=""><br>
        sup_company <br>
        <input type="text" name="sup_company" value="<?php echo $row['sup_company'];?>" id=""><br>
        sup_contact <br>
        <input type="text" name="sup_contact" value="<?php echo $row['sup_contact'];?>" id=""><br>
        sup_telephone <br>
        <input type="text" name="sup_telephone" value="<?php echo $row['sup_telephone'];?>" id=""><br>
        sup_email <br>
        <input type="text" name="sup_email" value="<?php echo $row['sup_email'];?>" id=""><br>

        <input type="submit" value="ยืนยัน"> | <input type="reset" value="ล้างข้อมูล">
    </form>
</body>
</html>