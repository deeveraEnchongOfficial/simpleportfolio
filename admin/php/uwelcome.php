<?php
include('../../include/db.php');
if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM contact WHERE id='$id'";
    $run=mysqli_query($db,$query);
    if($run){
        header("location:../?editwelcome=true#rlist");
    }
}
?>