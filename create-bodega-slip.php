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

        <div class="row justify-content-between">
          <div class="col-md-6">
            <h5 class="my-3">CREATE TRANSFER SLIP</h5>
          </div>           
          <div class="col-md-1">
            <a href="bodega-transfer-slip.php" class="btn btn-sm btn-block btn-outline-light mt-3">Back</a>
          </div>
        </div>
 
        <div class="row">
          <div class="col-md-2">
            <label>Quantity:</label>
            <input type="text" name="" class="form-control form-control-sm mb-3" placeholder="1234">
            <input type="text" name="" class="form-control form-control-sm mb-3" placeholder="1234">
            <input type="text" name="" class="form-control form-control-sm mb-3" placeholder="1234">
          </div>  
          <div class="col-md-5">
            <label>Description:</label>
            <input type="text" name="" class="form-control form-control-sm mb-3" placeholder="Solar Panel">
            <input type="text" name="" class="form-control form-control-sm mb-3" placeholder="Solar Panel">
            <input type="text" name="" class="form-control form-control-sm mb-3" placeholder="Solar Panel">
          </div>    
        </div>
        <div class="row">
          <div class="col-md-7">
            <a href="" class="text-light">+ Add more</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <hr class="border-white">
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <button class="btn btn-sm btn-block btn-primary">Submit</button>
          </div>
        </div>
  
        

      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>