<?php

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

$mysqli = require __DIR__ . "/database.php";

if(isset($_POST['edit']))
 {
    $id=$_SESSION['user_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $select= "select * from users where id='$id'";
    $sql = mysqli_query($mysqli,$select);
    $row = mysqli_fetch_assoc($sql);
    $res= $row['id'];
    if($res === $id)
    {
   
       $update = "update users set name='$name',email='$email' where id='$id'";
       $sql2=mysqli_query($mysqli,$update);
if($sql2)
       { 
           /*Successful*/
           header('location:EditProfilePage.html');
       }
       else
       {
           /*sorry your profile is not update*/
           header('location:AnnouncmentsPage.php');
       }
    }
    else
    {
        /*sorry your id is not match*/
        header('location:Logout.php');
    }
 }
?>