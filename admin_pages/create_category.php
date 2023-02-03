
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
    
    <title>create_category</title>
</head>
<body>

<?php include("static_page.php") ?>
    <center>
    
<div class="container">
<a href="view_category.php">
    <button class="index_btn">
        category index
    </button></a>
    <div class="section">
        
    <?php
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>

    <form action="../functions/create_category_code.php" method="post"
    enctype = "multipart/form-data">
    
    <label for="name">Name</label>
    <br>
    <input type="text" name="name"> <br><br>
    <label for="name">Image</label>
    <br>
    <input type="file" name="file">
    <br><br>
    <label for="Description">Description</label>
    <br>
    <textarea name="description" cols="30" rows="5">
    </textarea>
    <br><br>
    <button name="submit" class="submit_btn">save</button>
    </form>
    </div>
</div>
</center>

</body>
</html>