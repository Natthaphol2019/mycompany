<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
        <form action="customer_insert.php" method="post" enctype="multipart/form-data">
            
        cust_no <br>
        <input type="text" name="cust_no" id=""><br>
        cust_name <br>
        <input type="text" name="cust_name" id=""><br>
        cust_street <br>
        <input type="text" name="cust_street" id=""><br>
        cust_city <br>
        <input type="text" name="cust_city" id=""><br>
        cust_state <br>
        <input type="text" name="cust_state" id=""><br>
        cust_zip <br>
        <input type="text" name="cust_zip" id=""><br>
        ship_to_name <br>
        <input type="text" name="ship_to_name" id=""><br>
        ship_to_street <br>
        <input type="text" name="ship_to_street" id=""><br>
        ship_to_city <br>
        <input type="text" name="ship_to_city" id=""><br>
        ship_to_state <br>
        <input type="text" name="ship_to_state" id=""><br>
        ship_to_zip <br>
        <input type="text" name="ship_to_zip" id=""><br>
        credit_limit <br>
        <input type="number" name="credit_limit" id=""><br>
        last_revised <br>
        <input type="date" name="last_revised" id=""><br>
        credit_terms <br>
        <input type="text" name="credit_terms" id=""><br><br>
         เลือกรูปภาพ<br><br>
        <input type="file" name="myfile" id="uploadimage" onchange="previewimage();" autocomplete="off">
        <img id="uploadpreview" style="width: 100px; height: auto;" src="" alt="">
        <hr><br>

<script text="text/javascript">
        function previewimage() {
            var OFReader = new FileReader();
            OFReader.readAsDataURL(document.getElementById("uploadimage").files[0]);
            OFReader.onload = function (OFEvent) {
                document.getElementById("uploadpreview").src = OFEvent.target.result;
            }
        }
    </script>
        <input type="submit" value="เพิ่มรายชื่อ"> | <input type="reset" value="ล้างข้อมูล">
    </form>
</body>
</html>