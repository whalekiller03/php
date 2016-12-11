<?php 

    require_once("connDB.php");
    $id = $_GET["sid"]; //把全域變數變成一般變數
    $sql = "DELETE FROM `students` WHERE id=$id";
//     $spql = "DELETE FROM `student` WHERE id=".$id;
// $spql = "DELETE FROM `student` WHERE id=".$_GET["sid"];
    mysql_query($sql);
    header("Location:list.php");
?>