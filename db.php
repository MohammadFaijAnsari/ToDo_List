<?php
 $hostname="localhost";
 $username="root";
 $password="";
 $databasename="todo_list";
 $con=mysqli_connect($hostname,$username,$password,$databasename);
 if(!$con){
    echo "Connection Error".mysqli_connect_error();
 }
?>