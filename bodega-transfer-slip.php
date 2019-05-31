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
            <h5 class="my-3">BODEGA TRANSFER SLIP</h5>
          </div>          
          <!-- print button -->
          <div class="col-md-6">
            <div class="row justify-content-end mt-3">
              <div class="col-md-3">
                <p class="text-right pt-1">Find Bodega Slip</p>
              </div>
              <div class="col-md-4">
                <input type="date" class="form-control form-control-sm" name="" placeholder="00/00/0000">
              </div>
              <div class="col-md-2">
                <a href="create-bodega-slip.php" class="btn btn-sm btn-block btn-outline-light">Create</a>
              </div>
            </div>
          </div>
        </div>

        <!-- start of table -->
        <div class="table-responsive  mb-2">
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th>Trans #</th>
                <th>Assign To</th>
                <th>Received By</th>
                <th>Date</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr> 
                <td>12334</td>
                <td>Sherzod Amonov</td>
                <td>Josh Hedalgo</td>
                <td>03/07/18</td>
                <td><a class="btn btn-sm btn-warning py-0" href="view-bodega-slip.php">View</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- end of table -->
  
        

      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>