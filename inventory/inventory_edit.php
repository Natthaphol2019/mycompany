<?php
include('../connect.php');
$item_no = $_GET['item_no'];

$sql = "SELECT * FROM inventory WHERE item_no='$item_no'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

$sql_suppliers = "SELECT sup_no, sup_company FROM suppliers";
$result_suppliers = mysqli_query($connection, $sql_suppliers);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลสินค้า</title>
</head>
<style>
    #btn {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    #btn:hover {
      scale: 1.2;
    }
</style>
<body>
    <form action="inventory_update.php" method="post" enctype="multipart/form-data">
        item_no <br>
        <input type="text" name="item_no" value="<?php echo $row['item_no']; ?>" readonly><br>

        item_name <br>
        <input type="text" name="item_name" value="<?php echo $row['item_name']; ?>"><br>

        price <br>
        <input type="number" name="price" value="<?php echo $row['price']; ?>" step="0.01"><br>

        location <br>
        <input type="text" name="location" value="<?php echo $row['location']; ?>"><br>

        qty_on_hand <br>
        <input type="number" name="qty_on_hand" value="<?php echo $row['qty_on_hand']; ?>"><br>

        reorder_pt <br>
        <input type="number" name="reorder_pt" value="<?php echo $row['reorder_pt']; ?>"><br>

        sup_no (ผู้จัดส่ง)<br>
        <select name="sup_no" required>
            <option value="">-- กรุณาเลือกผู้จัดส่ง --</option>
            <?php
            while ($supplier = mysqli_fetch_assoc($result_suppliers)) {

                $selected = ($supplier['sup_no'] == $row['sup_no']) ? 'selected' : '';
                ?>
                <option value="<?php echo $supplier['sup_no']; ?>" <?php echo $selected; ?>>
                    <?php echo $supplier['sup_no'] . " - " . $supplier['sup_company']; ?>
                </option>
            <?php } ?>
        </select><br><br>
        <form action="inventory_update.php" method="post" enctype="multipart/form-data">
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



            <input type="submit" value="ยืนยัน" id="btn"> |
            <input type="reset" value="ล้างข้อมูล">
        </form>
</body>
            <script>
                function previewimage() {
                    const input = document.getElementById("uploadimage");
                    const preview = document.getElementById("uploadpreview");

                    if (input.files && input.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function (e) {
                            preview.src = e.target.result;
                        }
                        reader.readAsDataURL(input.files[0]);
                    }
                }

            </script>
</html>