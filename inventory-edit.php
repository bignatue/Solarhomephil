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
      
        <!-- start of the edit section -->
        <h5 class="my-2">Last transaction</h5>
        <div class="row">
          <div class="col-md-4">
            <label><b>Transaction ID</b></label>
            <p>12345</p>
            <label><b>Serial Number</b></label>
            <p>12345</p>
            <label><b>Description</b></label>
            <p>Canadian Solar</p>       
          </div>
          <div class="col-md-4">
            <label><b>Stock</b></label>
            <input type="text" name="" class="form-control form-control-sm edit-transaction-form mb-2" value="1">
            <label><b>Sold</b></label>
            <input type="text" name="" class="form-control form-control-sm edit-transaction-form mb-2" value="1">
            <label><b>Return/Replace</b></label>
            <input type="text" name="" class="form-control form-control-sm edit-transaction-form mb-2" value="1">
            <label><b>  For warranty</b></label>
            <input type="text" name="" class="form-control form-control-sm edit-transaction-form mb-2" value="1"> 
          </div>     
          <div class="col-md-4">   
            <label><b>Date Delivered</b></label>
            <input type="date" name="" class="form-control form-control-sm edit-transaction-form mb-2"> 
            <label><b>  Status</b></label>
            <select class="form-control form-control-sm mb-2">
              <option>Completed</option>
              <option>Pending</option>
              <option>On hold</option>
              <option>Void</option>
            </select>
            <label><b>  Remarks</b></label>
            <textarea class="form-control form-control-sm" rows="3"></textarea> 
          </div>
        </div>

        <hr class="border-white my-2">

        <div class="row justify-content-end">
          <div class="col-md-4">
            <a class="btn btn-primary btn-sm btn-block mt-2" href="#" role="button">Save</a>
          </div>
        </div>
        <!-- end of the edit section -->

        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>