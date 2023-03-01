<?php
$filepath=realpath(__FILE__);
$pageTitle='Product List';
include '../inc/header.php';














?>

<div class="protext">
 <h3 class="product">Product List</h3>
</div>

<div class="btn-delete">
<button class="btn btn-danger" id="delete-product-btn" href="deleteProducts.js">Mass Delete</button>
</div>
<div class="btn-add">
<a class="btn btn-primary"  href="ProductAdd.php">ADD</a>
</div>
<hr/>
<div class="container">
<div class="row">
<div class="col-lg-2" id="product-space">
<div class="input-group">
    <input type="checkbox" id="delete-checkbox">
    <div class="center">

    <p> JVC200123 <br> Acme DISC <br> 1.00 $ <br> Size: 700 MB</p>
  </div>
  </div>
</div>
  <div class="col-lg-2" id="product-space">
  <div class="input-group">
     <input type="checkbox" id="delete-checkbox">
     <div class="center">
    <p> KRK201929 <br> Acme DISC <br> 1.00 $ <br> Size: 700 MB</p>
  </div>
  </div>
</div>
<div class="col-lg-2" id="product-space">
<div  class="input-group">
  <input type="checkbox" id="delete-checkbox">
  <div class="center">

  <p> KRK201929 <br> Acme DISC <br> 1.00 $ <br> Size: 700 MB</p>
</div></div>
</div>
<div class="col-lg-2" id="product-space">
<div class="input-group">
   <input type="checkbox" id="delete-checkbox">
   <div class="center">

  <p> KRK201929 <br> Acme DISC <br> 1.00 $ <br> Size: 700 MB</p>
</div></div>
</div>
</div>
</div>
</div>
</div>