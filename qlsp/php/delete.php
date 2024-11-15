<?php
    if(isset($_GET["masp"])){
        $masp = $_GET["masp"];
        include "connect.php";
        $sql = "DELETE FROM sp WHERE masp=$masp";
        $conn->query($sql);
        header("location: ../index.php");
        exit;
    }
?>