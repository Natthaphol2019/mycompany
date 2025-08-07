<?php
include("../connect.php");

$cust_no = $_GET['cust_no'] ?? '';
$sql = "SELECT * FROM customers WHERE cust_no = '$cust_no'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลลูกค้า</title>
</head>
<body align="center">
    <h2>แก้ไขข้อมูลลูกค้า</h2>
    <form action="customer_update.php" method="post" enctype="multipart/form-data">
        cust_no <br>
        <input type="text" name="cust_no" value="<?php echo $row['cust_no']; ?>" readonly><br>

        cust_name <br>
        <input type="text" name="cust_name" value="<?php echo $row['cust_name']; ?>"><br>

        cust_street <br>
        <input type="text" name="cust_street" value="<?php echo $row['cust_street']; ?>"><br>

        cust_city <br>
        <input type="text" name="cust_city" value="<?php echo $row['cust_city']; ?>"><br>

        cust_state <br>
        <input type="text" name="cust_state" value="<?php echo $row['cust_state']; ?>"><br>

        cust_zip <br>
        <input type="text" name="cust_zip" value="<?php echo $row['cust_zip']; ?>"><br>

        ship_to_name <br>
        <input type="text" name="ship_to_name" value="<?php echo $row['ship_to_name']; ?>"><br>

        ship_to_street <br>
        <input type="text" name="ship_to_street" value="<?php echo $row['ship_to_street']; ?>"><br>

        ship_to_city <br>
        <input type="text" name="ship_to_city" value="<?php echo $row['ship_to_city']; ?>"><br>

        ship_to_state <br>
        <input type="text" name="ship_to_state" value="<?php echo $row['ship_to_state']; ?>"><br>

        ship_to_zip <br>
        <input type="text" name="ship_to_zip" value="<?php echo $row['ship_to_zip']; ?>"><br>

        credit_limit <br>
        <input type="number" name="credit_limit" value="<?php echo $row['credit_limit']; ?>"><br>

        last_revised <br>
        <input type="date" name="last_revised" value="<?php echo $row['last_revised']; ?>"><br>

        credit_terms <br>
        <input type="text" name="credit_terms" value="<?php echo $row['credit_terms']; ?>"><br><br>

        <hr><br>
        <?php
            $imageSrc = '';
            if (!empty($row['image_data'])) {
                $imageData = base64_encode($row['image_data']);
                $imageType = $row['image_type'];
                $imageSrc = "data:$imageType;base64,$imageData";
            }
            ?>
            <label>เลือกรูปภาพ</label><br><br>
            <input type="file" name="myfile" id="uploadimage" onchange="previewimage();" autocomplete="off"><br><br>

            <img id="uploadpreview" src="<?php echo $imageSrc; ?>"
                style="width: 100px; height: auto;"><br><br>


        <input type="submit" value="อัปเดตข้อมูล"> | 
        <a href="customer_list.php">ย้อนกลับ</a>
    </form>
    <script text="text/javascript">
        function previewimage() {
            var OFReader = new FileReader();
            OFReader.readAsDataURL(document.getElementById("uploadimage").files[0]);
            OFReader.onload = function (OFEvent) {
                document.getElementById("uploadpreview").src = OFEvent.target.result;
            }
        }
    </script>
</body>
</html>
