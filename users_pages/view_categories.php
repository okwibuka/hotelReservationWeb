
<?php
session_start();
include("../connection/connection.php");
include("../static/header.php");
// $category_menu = $_SESSION['menu_category'];

?>

<center>
<h2 style="margin-top:1em; color:green;">Our Categories!!</h2>
</center>
<div class="category_container">

<?php
$query="SELECT * FROM category order by created_at DESC ";
$query_run = mysqli_query($con , $query);
$sql = mysqli_num_rows($query_run);
if($sql > 0)
{

    while($row = mysqli_fetch_array($query_run))
    {
        // $_SESSION['category_menu'] = $row['category'];
        ?>
        <div class="category">
            <div class="container">
                <div class="section">
            <div class="card">
                <div class="card-header">
                <img src="../category_images/<?= $row['image']; ?>">
                </div>
                <div class="card-body">
                <p><a href="category_menu_view.php?category=<?= $row['category']; ?>">
                <?= $row['category']; ?></a></p>
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
    echo "no category found";
}

?>

</div>

<?php

?>

