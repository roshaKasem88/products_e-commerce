<?php
$filepath=realpath(__FILE__);
$pageTitle='Edit Product Type';
include '../inc/header.php';
$pt=new ProductType();
$fm=new Format();
$db=new Database();

$id = $_GET['id'];

if(!($fm->validate($id,5))){

  $Message = "Invalid Id";

  $_SESSION['Message'] = $Message;


}

$sql = "select * from types where type_id=$id";
$result=mysqli_query($db->link,$sql);
$data = mysqli_fetch_assoc($result);
// var_dump($data);
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
    $type_name=$_POST['type_name'];
    $fm->clean($type_name);
    $errors=[];
    if (!$fm->validate($type_name, 1)) {
        $errors['type_name'] = " Type Name Required";
      }
      $pt->updateType($type_name);
    }
    

?>
<div class="container" id="addcatfrm">


<form action="Edit.php?id=<?php echo $data['type_id']; ?>" method="post">
  <h4><strong>Add Product Type</strong></h4>
<hr/>
    <label for="text">Product Type Name:</label>
    <input type="text" name="type_name" value="<?php echo $data['type_name'];?>" class="form-control" placeholder="Enter Product Type Name">
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>

</form></div>