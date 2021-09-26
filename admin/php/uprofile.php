<?php
session_start();
include('../../include/db.php');

if(isset($_POST['uprofile'])){    
$name=mysqli_real_escape_string($db,$_POST['Name']);
$proffesion=mysqli_real_escape_string($db,$_POST['Proffesion']);
$aboutme=mysqli_real_escape_string($db,$_POST['AboutMe']);

$query="UPDATE profile SET ";
$query.="Name='$name',";
$query.="Proffesion='$proffesion',";
$query.="AboutMe='$aboutme' WHERE 1";
   
$queryrun=mysqli_query($db,$query);
if($queryrun){
    $_SESSION['username']=$name;
    header("location:../?editprofile=true&msg=updated");
}    

}    
    


