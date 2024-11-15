<?php
    include("connect.php");
    if (isset($_POST['submit'])) {
        $fullname = $_POST['fullname'];
        $img = $_POST['img'];
        $oldprice = $_POST['oldprice'];
        $newprice = $_POST['newprice'];
        $discount2 = $_POST['discount2'];
        $sql = "INSERT INTO sp (tensp, giacu, giamoi, phantramgiamgia) 
        VALUES('$fullname', '$oldprice', '$newprice', '$discount2')";
        $result = $conn->query($sql);
        if(!$result){
        die("Lỗi kết nối: " . $conn->connect_error);
        }
        header("location: ../index.php"); 
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Thêm Sinh Viên</title>
</head>
<body>
        <h3 class="title">Thêm sản phẩm</h3>
        <form method="post">
            <div>
                <label for="fullname">Tên sản phẩm</label>
                <input type="text" name="fullname">
            </div>
            <div>
                <label for=" img">Hình sản phẩm</label>
                <input type="file" src="" alt="">
            </div>
            <div>
                <label for="oldprice">Giá cũ</label>
                <input type="number" name="oldprice">
            </div>
            <div>
                <label for="newprice">Giá mới</label>
                <input type="number" name="newprice">
            </div>
            <div>
                <label for="discount2">Giảm giá</label>
                <input type="number" name="discount">
            </div>
            <input type="submit" name="submit" value="Thêm mới">
            <a href="../index.php"><input type="button" value="Hủy" class="cancel"></a>
        </form>
</body>
</html>