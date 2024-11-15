<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="css/style.css">
</head> 
<body>
    <a class="submit" href="php/create.php">Thêm sản phẩm</a>
    <div class="first">
        <div class="container">
            <div class="item">
                <img src="img/laptop1.webp" alt="photo" class="img-item">
                <h3 class="title">ASUS Zenbook 14 OLED UX3405MA-PP151W</h3>
                <span class="old-price">26.500.000vnd</span>
                <span class="discount">-6%</span><br>
                <span class="new-price">24.900.000vnd</span><br><br>
                <a class="btn primary" href="">Sửa</a>
                <a class="btn danger" style="margin-right: 0;" href="">Xóa</a>
            </div>

            <div class="item">
                <img src="img/dell-xps-13-9340-2024-1.jpg" alt="photo" class="img-item">
                <h3 class="title">Dell XPS 13 9340 2024 Core Ultra</h3>
                <span class="old-price">55.000.000vnd</span>
                <span class="discount">-30%</span><br>
                <span class="new-price">38.500.000vnd</span><br><br>
                <a class="btn primary" href="">Sửa</a>
                <a class="btn danger" style="margin-right: 0;" href="">Xóa</a>
            </div>

            <div class="item">
                <img src="img/dell-precision-7740-core-i7-9850h-2.jpg" alt="photo" class="img-item">
                <h3 class="title">Dell Precision 5540 -I7 9850H Ram 32G</h3>
                <span class="old-price">19.500.000</span>
                <span class="discount">-26%</span><br>
                <span class="new-price">14.450.000</span><br><br>
                <a class="btn primary" href="php/edit.php">Sửa</a>
                <a class="btn danger" style="margin-right: 0;" href="">Xóa</a>
            </div>
        </div>
    </div>
    <tboby>
    <?php
        //Kết nối CSDL
        include("php/connect.php");
        //Câu lệnh select 
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        //Đổ dữ liệu lên bảng
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo " 
                <div class='item'>
                <h2>$row[masp]</h2>
                <h3 class='title'>$row[tensp]</h3>
                <span class='old-price'>$row[giacu]</span>
                <span class='new-price'>$row[giamoi]</span>
                <span class='discount'>$row[phantramgiamgia]</span>
                <a class='btn primary' href='php/edit.php?id=$row[id]'>Sửa</a>
                <a class='btn danger' style='margin-right: 0;' href='php/delete.php?id=$row[id]'>Xóa</a>
                ";
            }
        }
    ?>
    </tbody>
</body>
</html>