<?php
    if(isset($_POST['submit'])){
        $img_name = $_FILES['upload_img']['name'];
        $img_name = $_FILES['upload_img']['tmp_name'];
        move_uploaded_file($tmp_name, "upload/".$img_name);
        //print_r($_FILES['upload_img']); // full design  array retuen kora.
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Image</title>
</head>
<body>
    <img src="upload/<?php if(isset($img_name)){echo $img_name;} ?>" alt="$img_name">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, magnam.</p>
</body>
</html>