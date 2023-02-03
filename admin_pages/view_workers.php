

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
    
    <title>create_menu</title>
</head>

<style>

table
{
border: none;
font-size: 15px;
font-weight: bold;
padding: 6px;
width: 20em;
margin-top:4em;
}

thead
{
    background-color: black;
    color: white;
    padding: 5px;
    text-transform: uppercase;
}
tbody
{
    background-color: white;
   text-align:center;
}

</style>

<body>

 <?php include("static_page.php") ?>

<div class="menu_container">
    <center>
    <table border="1">

    <?php
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

    ?>


    <thead>
        <tr>
            <th>
                NAME
            </th>
            <th>
                IMAGE
            </th>
            <th>
                PHONE
            </th>
            <th>Action</th>
        </tr>
    </thead>

    <?php
    
    $query = 'SELECT * FROM workers';
    $query_run = mysqli_query($con , $query);
    $sql = mysqli_num_rows($query_run);
    if($sql > 0)
    {
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
            <tbody>
                <tr>
                    <td><?= $row['name']; ?></td>
                
                    <td >
                    <img style="width:30px;height:30px;"
                     src="../workers_images/<?= $row['image']; ?>"></td>
                
                    <td><?= $row['phone']; ?></td>

                    <td><a href="edit_worker.php?id=<?= $row['id'];?>">edit</a>
                    <form action="../functions/delete_worker.php?id=<?= $row['id'];?>" 
                    method="post">
                        <input type="submit" value="delete" name="delete">
                    </form>
                </td>
                </tr>
            </tbody>
            <?php
        }
    }
    
    ?>

    </table>
    </center>
</div>

</body>
</html>