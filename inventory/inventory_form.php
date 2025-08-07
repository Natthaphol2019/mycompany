<?php
include("../connect.php");

$sql = "SELECT item_no FROM inventory ORDER BY item_no DESC LIMIT 1";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if ($row) {
    $last_item_no = $row['item_no'];
    $last_number = substr($last_item_no, 1);
    $next_number = str_pad($last_number + 1, 3, '0', STR_PAD_LEFT);
    $next_item_no = 'P' . $next_number;
} else {
    $next_item_no = 'P001';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มสินค้า</title>
</head>
<body>
    <form action="inventory_insert.php" method="post" enctype="multipart/form-data">
        item_no <br>
        <input type="text" name="item_no" value="<?php echo $next_item_no; ?>" readonly><br>
        item_name <br>
        <input type="text" name="item_name" id="" autocomplete="off"><br>
        price <br>
        <input type="number" name="price" id="" autocomplete="off"><br>
        location <br>
        <input type="text" name="location" id="" autocomplete="off"><br>
        qty_on_hand <br>
        <input type="number" name="qty_on_hand" id="" autocomplete="off"><br>
        reorder_pt <br>
        <input type="text" name="reorder_pt" id="" autocomplete="off"><br>
        sup_no <br>
        <select name="sup_no" required>
            <option value="">กรุณาเลือกผู้จัดส่ง</option>
            <?php
            $sql_sup = "SELECT sup_no, sup_company FROM suppliers";
            $result_sup = mysqli_query($connection, $sql_sup);
            while ($row_sup = mysqli_fetch_assoc($result_sup)) { ?>
                <option value="<?php echo $row_sup['sup_no']; ?>">
                    <?php echo $row_sup['sup_no'] . ' - ' . $row_sup['sup_company']; ?>
                </option>
            <?php } ?>
        </select><br><br>
        เลือกรูปภาพ<br><br>
        <input type="file" name="myfile" id="uploadimage" onchange="previewimage();" autocomplete="off">
        <img id="uploadpreview" style="width: 100px; height: auto;" src="" alt="">
        <br><br>
        <hr>
        <input type="submit" value="เพิ่มสินค้า"> | <input type="reset" value="ล้างข้อมูล">
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
