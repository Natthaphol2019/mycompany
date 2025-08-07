<?php
include("../connect.php");
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include('../components/navbar.php'); ?>
    <a href="inventory_form.php">ไปหน้าเพิ่มข้อมูล</a>
    <table class="table table-bordered table-striped text-center">
        <th>image</th>
        <th>item_no</th>
        <th>item_name</th>
        <th>price</th>
        <th>location</th>
        <th>qty_on_hand</th>
        <th>reorder_pt</th>
        <th>sup_company</th>
        <th>แก้ไข</th>
        <th>ลบ</th>
        <?php
        $sql = "SELECT inventory.*, suppliers.sup_company FROM inventory INNER JOIN suppliers ON inventory.sup_no = suppliers.sup_no";

        $result = mysqli_query($connection, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $imageData = base64_encode($row["image_data"]);
            $imageType = $row["image_type"];
            ?>
            <tr>
                <td>
                    <?php
                    if (!empty($imageData)) {
                        echo "<img src='data:$imageType;base64,$imageData' style='width: 100px; height: auto;'>";
                    }
                    ?>
                </td>
                <td><?php echo $row['item_no']; ?></td>
                <td><?php echo $row['item_name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['qty_on_hand']; ?></td>
                <td><?php echo $row['reorder_pt']; ?></td>
                <td><?php echo $row['sup_company']; ?></td>
                <td>
                    <a href="inventory_edit.php?item_no=<?php echo $row['item_no']; ?>" class="btn btn-warning btn-sm">
                        แก้ไข </a>
                </td>
                <td>
                    <a href="inventory_delete.php?item_no=<?php echo $row['item_no']; ?>" class="btn btn-danger btn-sm"
                        onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบ?')"> ลบ </a>
                </td>
            </tr>
            <?php
        }
        ?>


    </table>
</body>

</html>