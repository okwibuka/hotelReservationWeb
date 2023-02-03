


 <?php

session_start();
include("../connection/connection.php");
if(isset($_POST["submit"]))

{
   

   $id = mysqli_real_escape_string($con , $_POST['id']);
   $name =  mysqli_real_escape_string($con ,$_POST['name']);
   $phone = mysqli_real_escape_string($con ,$_POST['phone']);
   $description = mysqli_real_escape_string($con ,$_POST['description']);


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
               $fileDestination = '../workers_images/'.$fileNameNew;
               move_uploaded_file($fileTmpName , $fileDestination);


// main codes

   $query = "UPDATE workers SET name = '$name', image ='$fileNameNew', 
   description='$description' , phone='$phone' WHERE id='$id ' ";

   $query_run = mysqli_query($con , $query);
   if($query_run)
   {

   $_SESSION['message'] = " <span style='color:green'>updated!!</span>";
   header("Location: ../admin_pages/view_workers.php");
   die;
   }
   else
   {
       $_SESSION['message'] = " <span style='color:red'>error occured in uploading</span>";
       header("Location: ../admin_pages/view_workers.php");
       exit(0);
   }
}

else
{
$_SESSION['message'] = " <span style='color:red'>file is too big</span>";
header("Location: ../admin_pages/view_workers.php ");
exit(0);
}

}
else
{
$_SESSION['message'] = " <span style='color:red'>error occured in uploading</span>";
header("Location: ../admin_pages/view_workers.php ");
exit(0);
}

}
else
{
$_SESSION['message'] = " <span style='color:red'>select an image!</span>";
header("Location: ../admin_pages/view_workers.php");
exit(0);

}
}

?>