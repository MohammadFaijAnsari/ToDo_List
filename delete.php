<?php
 include("db.php");
 if(isset($_GET['delete_id'])){
    $delete_id=$_GET['delete_id'];
    $delete_data="DELETE from todolist WHERE id='$delete_id'";
    $run_data=mysqli_query($con,$delete_data);
    if($run_data){
        header("Location:index.php");
    }
 }else{
    echo "Error";
 }
?>