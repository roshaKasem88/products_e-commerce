<?php
$filepath=realpath(__FILE__);
$pageTitle='Product Types';
include '../inc/header.php';
$pt=new ProductType();
$db=new Database();
$query = "SELECT * FROM types";
$result=mysqli_query($db->link,$query);
 $data=mysqli_fetch_assoc($result);
?>
</br></br>
<div class="cattext">
 <h5 class="product">Product Types</h5>
 </div>
 
 <div class="addcat">
<a class="btn btn-primary"  href="./AddCategory.php">ADD</a>
</div>
<hr/>


<div class="container">
<table class="table">
  <thead class="">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
                                          
                                          <?php 
                                           while($data=mysqli_fetch_assoc($result)){
                                          ?>
                                          
                                          <tr>
                                                  <td><?php echo $data['type_id'];?> </td>
                                                  <td><?php echo $data['type_name'];?> </td>
                                                
                                                  <td>
                                                  <a href='Delete.php?id=<?php echo $data['type_id'];?>' class='btn btn-danger m-r-1em'>Delete</a>
                                                  <a href='Edit.php?id=<?php echo $data['type_id'];?> ' class='btn btn-primary m-r-1em'>Edit</a>
  
                                                  </td>
                                                  </tr>
                                                  <?php } ?>     
                                            
                                                                          
  </tbody>
</table>
</div>
</div>

  
  

