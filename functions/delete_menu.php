
<?php
include("../connection/connection.php");
if(isset($_GET['id']))
{
    $id = mysqli_real_escape_string($con , $_GET['id']);
    $query = "DELETE FROM menu WHERE id = $id";
    $query_run = mysqli_query($con , $query);
    if($query_run)
    {

        header("Location: ../admin_pages/view_menu.php");
    }
}
?>