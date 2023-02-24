<?php
$filepath=realpath(__FILE__);
$pageTitle='Add Product';
include '../inc/header.php';
$pt=new ProductType();

//Fetch Product Types ...
$sql = "select * from types";
$op  = mysqli_query($db->link,$sql);

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $sku=$_POST['sku'];
  $name=$_POST['name'];
  $price=$_POST['price'];
  $type_id =  $_POST['type_id'];
  $fm->clean($sku);
  $fm->clean($name);
  $fm->clean($price);


  $errors=[];
  if (!$fm->validate($sku, 1)) {
      $errors['sku'] = "Name Is Required";
    }
    if (!$fm->validate($name, 1)) {
      $errors['sku'] = "Name Is Required";
    }
    if (!$fm->validate($price, 1)) {
      $errors['sku'] = "Price Is Required";
    }


  
    if (count($errors) > 0) {

      $_SESSION['Message'] = $errors;
    } else {
      header("Location: index.php");

    }

}
?>
<div class="protext">
 <h3 class="product">Product Add</h3>
</div>

<div class="btnCancel">
<button  class="btn btn-danger"  href="">Cancel</button>
</div>
<div class="btnSave">
<button type="submit" class="btn btn-primary" id="save">Save</button>
</div>

<hr/>
<br/>
<div class="container">
<form>
  <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">SKU</label>
    <div class="col-sm-10">
      <input type="text" name="sku" class="form-control" id="sku">
    </div>
  </div>


  <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name">
    </div>
  </div>


  <div class="form-group row">
    <label for="text" class="col-sm-2 col-form-label">Price ($)</label>
    <div class="col-sm-10">
      <input type="text" id="price" class="custom-select" name="price">
    </div>
  </div>
  <!--  -->

  <div class="form-group">
  <label for="text" class="col-md-4 col-form-label">Type Switcher</label>
  <select id="productType" onclick="test()" name="type_id" class="custom-select">
  <option selected >Type Switcher</option>
         <?php 
         while($data = mysqli_fetch_assoc($op)){ 
      ?>

                     <option value="<?php echo $data['type_id'];?>"> <?php echo $data['type_name']; ?> </option>

                     <?php } ?>
                 </select>
    </div>

</form>
</div>
<div class="container">
<!-- Book Form Attributes -->
<form id="Book" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
<div class="form-group">
    <label for="text" class="col-md-4 col-form-label" >Weight (KG) </label>
      <input type="text" class="custom-select" id="weight" name="bookweight">
    </div>
    <div class="form-group">
    <p><strong><i>Please,Provide weight in KG </i></strong></p>
</div>
</form>
</div>


<!-- DVD-Disk Form Attributes -->
<div class="container">

<form id="DVD" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="form-group">
    <label for="text" class="col-md-4 col-form-label" >Size (MB) </label>
      <input type="text" class="custom-select" id="size" name="dvdSize">
    </div>
    <div class="form-group">
    <p><strong><i>Please,Provide Disk Space in MB </i></strong></p>
</div>
</form>
</div>


<!-- Furniture Form Attributes -->
<div class="container">
<form id="Furniture" method="post"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="form-group">
    <label for="text" class="col-md-4 col-form-label" >Height (CM) </label>
      <input type="text" class="custom-select" id="height" name="height">
    </div>
<div class="form-group">
    <label for="text" class="col-md-4 col-form-label" >Width (CM) </label>
      <input type="text" class="custom-select" id="width" name="width">
    </div>
    <div class="form-group">
    <label for="text" class="col-md-4 col-form-label" >Length (CM) </label>
      <input type="text" class="custom-select" id="length" name="length">
    </div>
    <div class="form-group">
    <p><strong><i>Please,Provide Dimensions Height,Width and Length in Centimeters</i></strong></p>
</div>
</form>
</div>


