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
            <p>1</p>
            <label><b>Sold</b></label>
            <p>1</p>
            <label><b>Return/Replace</b></label>
            <p>1</p> 
          </div>     
          <div class="col-md-4">   
            <label><b>  For warranty</b></label>
            <p>1</p>
            <label><b>Date Delivered</b></label>
            <p>9/12/2018</p>
            <label><b>  Remarks</b></label>
            <p>Completed</p> 
          </div>
        </div>

        <hr class="border-white my-2">

        <div class="table-responsive">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-1">
            <h5 class="my-2">Update history</h5>          </div>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Description</th>
                  <th>Date Delivered</th>
                  <th>Stock</th>
                  <th>Sold</th>
                  <th>Return/Replace</th>
                  <th>For warranty</th>
                  <th>Remark/s</th>
                  <th>Status</th>  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12345</td>
                  <td>Canadian Solar</td>
                  <td>11 Aug 2018</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>All good</td>
                  <td>Completed</td>
                </tr>
                <tr>
                  <td>12345</td>
                  <td>Canadian Solar</td>
                  <td>11 Aug 2018</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>All good</td>
                  <td>Completed</td>
                </tr>
                <tr>
                  <td>12345</td>
                  <td>Canadian Solar</td>
                  <td>11 Aug 2018</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>All good</td>
                  <td>Completed</td>
                </tr>
                <tr>
                  <td>12345</td>
                  <td>Canadian Solar</td>
                  <td>11 Aug 2018</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>1</td>
                  <td>All good</td>
                  <td>Completed</td>
                </tr>
              </tbody>
            </table>

          </div>
        <!-- end of the edit section -->

        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>