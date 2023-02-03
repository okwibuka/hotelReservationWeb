
 <?php

 session_start();
 include("../connection/connection.php");
if(isset($_POST["submit"]))

{
    

    $id = mysqli_real_escape_string($con , $_POST['id']);
    $name =  mysqli_real_escape_string($con ,$_POST['name']);
    $price = mysqli_real_escape_string($con ,$_POST['price']);
    $description = mysqli_real_escape_string($con ,$_POST['description']);
    $category = mysqli_real_escape_string($con ,$_POST['category']);


    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = '../menu_images/'.$fileNameNew;
                move_uploaded_file($fileTmpName , $fileDestination);


// main codes

    $query = "UPDATE menu SET name = '$name', image ='$fileNameNew' , price='$price' , 
    description='$description' , category='$category' WHERE id='$id ' ";

    $query_run = mysqli_query($con , $query);
    if($query_run)
    {

    $_SESSION['message'] = " <span style='color:green'>updated!!</span>";
    header("Location: ../admin_pages/view_menu.php");
    die;
    }
    else
    {
        $_SESSION['message'] = " <span style='color:red'>error occured in uploading</span>";
        header("Location: ../admin_pages/view_menu.php");
        exit(0);
    }
}

else
{
$_SESSION['message'] = " <span style='color:red'>file is too big</span>";
header("Location: ../admin_pages/view_menu.php ");
exit(0);
}

}
else
{
$_SESSION['message'] = " <span style='color:red'>error occured in uploading</span>";
header("Location: ../admin_pages/view_menu.php ");
exit(0);
}

}
else
{
$_SESSION['message'] = " <span style='color:red'>select an image!</span>";
header("Location: ../admin_pages/view_menu.php ");
exit(0);

}
}

?>