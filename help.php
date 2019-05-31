<?php 
  include'include/header.php';
  include'include/topmenu.php';
?>

  <div class="container-fluid">
    <div class="row">
      <!-- side menu -->
      <?php include'include/sidenav.php'; ?>

      <!-- content start -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h5 class="my-2">Help</h5>
        <hr class="border-white">
        <div class="row">

          <div class="col-md-6">
            <label class=" text-warning">Add agent</label>
            <p>Add client is just adding new agent it will not add the purchase product details. Details can be edit at agent list section</p>
            <label class=" text-warning">Add client</label>
            <p>Add client is just adding new client it will not add the purchase product details. Details can be edit at client list section</p>
            <label class="text-warning">Add product</label>
            <p>Add product is just adding product if you wish to add product quantity then you can add in the add stock section. If you enter a wrong details of the product then go to product list and click edit.</p>        
            <label class="text-warning">Add stock</label>
            <p>Add stock is adding the quantity of the product. If the quantity has been updated and if you wish to change then go to inventory section and click edit.</p>
            <label class="text-warning">Stock adding history</label>
            <p>If you want to view the add history log of the product then go to inventory section find the product then select view.</p>
          </div>

          <div class="col-md-6">            
            <label class="text-warning">Return/replace & warranty</label>
            <p>It will only add the number of return/replace in the inventory section and deduct froom stock column.</p>
            <label class="text-warning">Warranty</label>
            <p>It will only add the number of warranty in the inventory section and deduct froom stock column.</p>
            <label class="text-warning">Client list</label>
            <p>Client list is just a list of existing client if you wish to add a client then go to add client. Note that you cant add cleint withtout a transaction or purchase a product.</p>

          </div>
        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>