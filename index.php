<?php
 include("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <div class="container">
    <h1 class="heading">TODO LIST</h1>
    <form action="insert.php" method="post" autocomplete="off">
        <div class="input">
            <input type="text" name="text" id="text" required>
            <button type="submit" id='add' name="add">ADD</button>
        </div>
        
        <?php
         $select_data="SELECT * FROM todolist";
         $run_data=mysqli_query($con,$select_data);
         while($row_data=mysqli_fetch_array($run_data)){
            $id=$row_data['id'];
            $title=$row_data['title'];
        ?>
        <ul class="list">
            <li class="item">
                <p><?php echo $title;?></p>
                <!-- <button type="submit" id="check" name="check" >
                <i class="fa-regular fa-circle-check" ></i>
                </button> -->
                <a href="delete.php?delete_id=<?php echo $id;?>" id="delete" name="delete">
                  <i class="fa-solid fa-trash-can"></i>
                </a>
            </li>
        </ul>
        <?php } ?>
        <!-- <hr> -->
        <?php
        // $select_data="SELECT * FROM todolist WHERE status=1";
        // $run_data=mysqli_query($con,$select_data);
        // while($row_data=mysqli_fetch_array($run_data)){
        //    $id=$row_data['id'];
        //    $title=$row_data['title'];
        ?>
        <!-- <ul class="list">
            <li class="item">
                <p>Item1</p>
                <button type="submit" id="check" name="check">
                <i class="fa-regular fa-circle-check"></i>
                </button>
                <button type="submit" id="delete" name="delete">
                <i class="fa-solid fa-trash-can"></i>
                </button>
            </li>
        </ul> -->
        <?php
        //  } 
        
        ?>
        </form>
  </div>    
</body>
</html>