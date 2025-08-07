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
    <?php include("../components/navbar.php"); ?>
    <a href="supplier_form.php">ไปหน้าเพิ่มข้อมูลผู้จัดส่ง</a>
    <table class="table table-bordered table-striped text-center">
        <th>sup_no</th>
        <th>sup_company</th>
        <th>sup_contact</th>
        <th>sup_telephone</th>
        <th>sup_email</th>
        <th>edit</th>
        <th>delete</th>
        <?php
        $sql = "SELECT * FROM suppliers";
        $result = mysqli_query($connection, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?php echo $row['sup_no']; ?></td>
                <td><?php echo $row['sup_company']; ?></td>
                <td><?php echo $row['sup_contact']; ?></td>
                <td><?php echo $row['sup_telephone']; ?></td>
                <td><?php echo $row['sup_email']; ?></td>
                <td>
                    <a href="supplier_edit.php?sup_no=<?php echo $row['sup_no']; ?>" class="btn btn-warning btn-sm"> แก้ไข </a>
                </td>
                <td>
                    <a href="supplier_delete.php?sup_no=<?php echo $row['sup_no']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบ?')"> ลบ </a>
                </td>




            </tr>
            <?php
        }
        ?>


    </table>
</body>

</html>