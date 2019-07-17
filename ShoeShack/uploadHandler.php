<?php include 'config.php';

$targetDir =  realpath(dirname(getcwd()))."images/";
$fileName =basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST['upload'])&& !empty($_FILES["image"]["name"])) {
    $price = $_POST['price'];
    $size = $_POST['size'];
    $brand = $_POST['brand'];

    if (empty($price)) {
        header('location:upload.php?pError');
        exit();
    } else {
        $price = $price;
    }

    if (empty($size)) {
        header('location:upload.php?sError');
        exit();
    } else {
        $size = $size;
    }

    if (empty($brand)) {
        header('location:upload.php?bError');
        exit();
    } else {
        $brand = $brand;
    }

    $picForm = array('jpg', 'jpeg', 'png');
    $picName = $_FILES["image"]["tmp_name"];
    if (in_array($fileType, $picForm)) {
        if (move_uploaded_file($picName, $targetFilePath)) {
            $sql = "INSERT INTO `sale` (`id` , `image` , `brand` , `size` , `price`)
                  VALUES (NULL ,'.$fileName' ,'$brand', '$size', '$price')";
            if (mysqli_query($conn, $sql)) {
                echo " Image added successfully";
            } else {
                echo "image not added";
            }
        } else {
            echo "image  not uploaded successfully";
        }
    } else {
        echo "inappropriate file format";
    }
}
