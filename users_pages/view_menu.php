
<?php
include("../connection/connection.php");
include("../static/header.php")
?>

<center>
<h2 style="margin-top:1em; color:green;">Our Menu!!</h2>
</center>
<div class="category_container">

<?php
$query="SELECT * FROM menu order by created_at DESC ";
$query_run = mysqli_query($con , $query);
$sql = mysqli_num_rows($query_run);
if($sql > 0)
{

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <div class="category">
            <div class="container">
                <div class="section">
            <div class="card">
                <div class="card-header">
                <img src="../menu_images/<?= $row['image']; ?>">
                </div>
                <div class="card-body">
                <a href=""><p>
                <?= $row['name']; ?></p></a>
                <br>
                <span><?= $row['description']; ?></span>
                <br> <br>
                <p><?= $row['price']; ?></p>
                </div>
        </div>
        </div>
        </div>
        </div>
    <?php

        
        
    }
}
else
{
    echo "no menu found";
}

?>

</div>

<?php

?>

