<?php
include 'connect.php';

if(isset($_GET['delete'])){
    $delete_id=$_GET['delete'];
    // delete query

    $delete_data=mysqli_query($conn,"Delete from phpcrud where id=$delete_id") or die("query failed");
    if($delete_data){
        header('location:display.php');
    }else{
        header('location:display.php');
    }
}

?>