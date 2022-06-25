<?php
    require_once '../config/connect.php';
    
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];
    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $descr = $_POST['size'];
    $descr = $_POST['weight'];
    $descr = $height.'x'.$width.'x'.$length;

    mysqli_query($connect, "INSERT INTO `product` (`id`, `sku`, `name`, `price`, `descr`) VALUES (NULL, '$sku', '$name', '$price', '$descr');");

    header('Location: ../php/newlist.php');
?>