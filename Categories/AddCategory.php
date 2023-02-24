<?php
$filepath=realpath(__FILE__);
$pageTitle='Create Category';
include '../inc/header.php';
$pt=new ProductType();
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
    $cat_name=$_POST['cat_name'];
    $fm->clean($cat_name);
    $errors=[];
    if (!$fm->validate($cat_name, 1)) {
        $errors['cat_name'] = " Type Name Required";
      }
    
      if (count($errors) > 0) {

        $_SESSION['Message'] = $errors;
      } else {
        $pt->insertType($cat_name);
        header("Location: index.php");

      }

}
?>
<div class="container" id="addcatfrm">

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

  <h4><strong>Add Category</strong></h4>
<hr/>
    <label for="text">Category Name:</label>
    <input type="text" name="cat_name" class="form-control" placeholder="Enter Category Name">
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>

