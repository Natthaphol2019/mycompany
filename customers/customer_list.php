<?php
include("../connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายชื่อลูกค้า</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php include('../components/navbar.php'); ?>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>รายชื่อลูกค้า</h4>
            <a href="customer_form.php" class="btn btn-danger btn-sm">+ เพิ่มข้อมูลลูกค้า</a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>picture</th>
                        <th>cust_no</th>
                        <th>cust_name</th>
                        <th>cust_street</th>
                        <th>cust_city</th>
                        <th>cust_state</th>
                        <th>cust_zip</th>
                        <th>ship_to_name</th>
                        <th>ship_to_street</th>
                        <th>ship_to_city</th>
                        <th>ship_to_state</th>
                        <th>ship_to_zip</th>
                        <th>credit_limit</th>
                        <th>last_revised</th>
                        <th>credit_terms</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM customers";
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
                            <td><?php echo $row['cust_no']; ?></td>
                            <td><?php echo $row['cust_name']; ?></td>
                            <td><?php echo $row['cust_street']; ?></td>
                            <td><?php echo $row['cust_city']; ?></td>
                            <td><?php echo $row['cust_state']; ?></td>
                            <td><?php echo $row['cust_zip']; ?></td>
                            <td><?php echo $row['ship_to_name']; ?></td>
                            <td><?php echo $row['ship_to_street']; ?></td>
                            <td><?php echo $row['ship_to_city']; ?></td>
                            <td><?php echo $row['ship_to_state']; ?></td>
                            <td><?php echo $row['ship_to_zip']; ?></td>
                            <td><?php echo $row['credit_limit']; ?></td>
                            <td><?php echo $row['last_revised']; ?></td>
                            <td><?php echo $row['credit_terms']; ?></td>
                            <td>
                                <a href="customer_edit.php?cust_no=<?php echo $row['cust_no']; ?>"
                                    class="btn btn-warning btn-sm">แก้ไข</a>
                            </td>
                            <td>
                                <a href="customer_delete.php?cust_no=<?php echo $row['cust_no']; ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('คุณแน่ใจหรือไม่ว่าต้องการลบ?')">ลบ</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>