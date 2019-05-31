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
        <h5 class="my-2">Cleint Details</h5>
        <div class="row">
          <div class="col-md-4">
            <table class="table table-sm">
              <tr>
                <td>Name:</td>
                <td>Jason Smith</td>
              </tr>
              <tr>
                <td>Contact Numer:</td>
                <td>123 456 789</td>
              </tr>
              <tr>
                <td>Email Address:</td>
                <td>jason@shpc.com</td>
              </tr>
              <tr>
                <td>Address:</td>
                <td>C5 Taguig City Philippines</td>
              </tr>
            </table>     
          </div>
          <div class="col-md-4">
            <table class="table table-sm">
              <tr>
                <td>Client Type:</td>
                <td>Regular</td>
              </tr>
            </table>
          </div>
        </div>
 

        <div class="table-responsive">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-1">
            <h5 class="my-2">Product Purchase</h5>          </div>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Description</th>
                  <th>Date Delivered</th>
                  <th>Orignal Price</th>
                  <th>New Price</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12345</td>
                  <td>Canadian Solar</td>
                  <td>11 Aug 2018</td>
                  <td>1</td>
                  <td>1</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>12345</td>
                  <td>Canadian Solar</td>
                  <td>11 Aug 2018</td>
                  <td>1</td>
                  <td>1</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>12345</td>
                  <td>Canadian Solar</td>
                  <td>11 Aug 2018</td>
                  <td>1</td>
                  <td>1</td>
                  <td>2</td>
                </tr>
                <tr>
                  <td>12345</td>
                  <td>Canadian Solar</td>
                  <td>11 Aug 2018</td>
                  <td>1</td>
                  <td>1</td>
                  <td>2</td>
                </tr>
                <tr>
                  <th colspan="5">Total</th>
                  <th>8</th>
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