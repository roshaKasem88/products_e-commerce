<?php
$filepath=realpath(__FILE__);
$pageTitle='Delete Product Type';
include '../inc/header.php';
$pt=new ProductType();
$fm=new Format();

$id = $_GET['id'];

if(!($fm->validate($id,5))){
 echo 'Id Is not Valid';
}


$sql = "delete from types where type_id=$id";
$result=mysqli_query($db->link,$sql);

if($op){
 $_SESSION['Message']= "Raw removed";
}else{
    $_SESSION['Message']= "Error Try Again";

}

       header("Location: index.php");

    
    

?>