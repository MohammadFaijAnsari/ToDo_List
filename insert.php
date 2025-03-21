<?php
 include("db.php");
 if(isset($_POST['add'])){
    $title=$_POST['text'];
    $insert_data="INSERT INTO todolist(id,title,status) VALUES(NULL,'$title',0)";
    $run_data=mysqli_query($con,$insert_data);
    if($run_data){
        // header("Location:index.php");
        echo "<script>window.open('index.php','_self')</script>";
    }
 }
?>