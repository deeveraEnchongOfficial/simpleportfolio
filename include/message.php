<?php
include('db.php');
$email = $_POST['email'];
$message = $_POST['message'];

$query="INSERT INTO contact (cemail,cmessage) "; 
$query.="VALUES('$email','$message')";
$run = mysqli_query($db,$query);
if($run){
    echo 'Your message has been sent. Thank you!';
    // header("Location:../");
}
