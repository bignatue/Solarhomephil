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

        <div class="row justify-content-end">      
          <!-- print button -->
         <div class="col-md-1">
            <button class="btn btn-sm btn-block btn-outline-light mt-3" onClick="window.print()">Print</button>
          </div>
        </div>

        <!-- content start -->
        <div class="row">
          <div class="col-md-12 text-center">
            <h5>BODEGA TRANSFER SLIP</h5>
            <hr class="border-white" width="100">
          </div>

          <div class="col-md-6">
            <h5 class="border-bottom">To: Sherzod Amonov</h5>
            <p class="border-bottom">Address: Makati Philippines</p>
          </div>           
          <div class="col-md-6 text-right">
            <h5 class="border-bottom">Transaction #: 1234</h5>
            <p class="border-bottom">Date: 10/10/2018</p>
          </div>
        </div>

        <!-- start of table -->
        <div class="table-responsive  mb-2">
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Quantity</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr> 
                <td>1.</td>
                <td>5</td>
                <td>Canadian Solar Panel</td>
              </tr>
              <tr> 
                <td>2.</td>
                <td>5</td>
                <td>Canadian Solar Panel</td>
              </tr>
              <tr> 
                <td>3.</td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>4.</td>
                <td></td>
                <td></td>
              </tr>
              <tr> 
                <td>5.</td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- end of table -->

        <div class="row"> 
          <div class="col-md-6">
            <p class="border-bottom">Received By: Sherzod Amonov</p>
          </div>
        </div>
  
        

      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>