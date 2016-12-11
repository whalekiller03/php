<?php
    require_once("connDB.php");
    $id = $_POST["id"];
    $name = $_POST["name"]; 
    $phone = $_POST["phone"];
    $email = $_POST["email"];
        
    $sql = "UPDATE `students` SET name='$name',phone='$phone',email='$email' WHERE id= $id";
    mysql_query($sql);
    header("Location:list.php");    
?>