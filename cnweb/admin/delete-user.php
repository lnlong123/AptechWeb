<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
    include("../config/db.php");
    $id_can_xoa = $_GET['id'];    
    $sql = "DELETE FROM nguoidung WHERE id ='$id_can_xoa'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header('Location:index.php');
    }
?>
