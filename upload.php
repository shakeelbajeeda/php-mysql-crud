<?php
require_once 'database.php';
if(isset($_POST['upload'])){
    $file_name =$_FILES['image']['name'];
    print_r($file_name);
    die();
    $insert = "INSERT INTO images (image)
        VALUES ('$file_name')";
        $result = $db->query($insert);
        if($result){
            move_uploaded_file($_FILES['image']['tmp_name'],"/upload-images". $_FILES['image']['name']);
            die("image inserted successfully");
        }


}
?>