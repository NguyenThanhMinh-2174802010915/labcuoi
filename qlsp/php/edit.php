<?php
    include("connect.php");
    $id = $_GET['masp'];
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        if (!isset($_GET["masp"])) {
            header("location: index.php");
            exit;
        }
        $sql = "SELECT * FROM sp WHERE masp='$masp'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if (!$row) {
            header("location: index.php");
            exit;
        }
        $fullname = $row["fullname"];
        $oldprice = $row["oldprice"];
        $newprice = $row["newprice"];
        $discount = $row["discount"];
        } else{

            $fullname = $_POST['fullname'];
            $oldprice = $_POST['oldprice'];
            $newprice = $_POST['newprice'];
            $discount = $_POST['discount'];
            $sql = "UPDATE sp SET fullname='$fullname', oldprice='$oldprice', 
            newprice='$newprice', discount='$discount' WHERE masp='$masp'";
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
    <title>Sửa sản phẩm</title>
</head>
<body>
        <h3 class="title">Sửa sản phẩm</h3>
        <form method="post">
            <div>
                <label>Mã sản phẩm</label>
                <input type="text" name="masp" disabled value="<?php echo $masp; ?>">
            </div>
            <div>
                <label for="fullname">Tên sản phẩm</label>
                <input type="text" name="fullname" value="<?php echo $fullname; ?>">
            </div>
            <div>
                <label for=" img">Hình sản phẩm</label>
                <input type="file" src="" alt="" value="<?php echo $img; ?>">
            </div>
            <div>
                <label for="oldprice">Giá cũ</label>
                <input type="number" name="oldprice" value="<?php echo $oldprice; ?>">
            </div>
            <div>
                <label for="newprice">Giá mới</label>
                <input type="number" name="newprice" value="<?php echo $newprice; ?>">
            </div>
            <div>
                <label for="discount2">Giảm giá</label>
                <input type="number" name="discount" value="<?php echo $discount2; ?>">
            </div>
            <input type="submit" name="submit" value="Cập nhật">
            <a href="../index.php"><input type="button" value="Hủy" class="cancel"></a>
        </form>
</body>
</html>