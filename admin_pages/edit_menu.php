

<?php 
include("../connection/connection.php");
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin_pages_css/style.css">
    
    <title>edit_menu</title>
</head>
<body>

<?php include("static_page.php") ?>
    <center>
    
<div class="container">
   
    <div class="section">
        
    <?php
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>

    <?php

    if(isset($_GET['id']))
    {
        $id = mysqli_real_escape_string($con , $_GET['id']);
        $query = "SELECT * FROM menu WHERE id='$id'";
        $query_run = mysqli_query($con , $query);
        $sql = mysqli_num_rows($query_run);
        if($sql > 0)
        {
           while($row = mysqli_fetch_array($query_run))
           {
            ?>

<form action="../functions/edit_menu.php" method="post"
    enctype = "multipart/form-data">

    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    <label for="name">Name</label>
    <br>
    <input type="text" name="name" value="<?= $row['name']; ?>"> <br><br>
    <label for="name">Image</label>
    <br>
    <input type="file" name="file" value="<?= $row['image']; ?>">
    <br><br>
    <label for="name">Price</label>
    <br>
    <input type="text" name="price" value="<?= $row['price']; ?>"> 
    <br><br>
    <label for="Description">Description</label>
    <br>
    <textarea name="description" cols="30" rows="5" value="<?= $row['description']; ?>">
    <?= $row['description']; ?>
    </textarea>
    <br><br>
    <label for="category">Category</label>
    <br>
    <input type="text" name="category" value="<?= $row['category']; ?>"> 
    <br><br>
    <button name="submit" class="submit_btn">edit</button>
    </form>
            
            <?php
           }
        }
    }

    ?>

    
    </div>
</div>
</center>

</body>
</html>