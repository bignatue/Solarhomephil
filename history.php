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

        <div class="table-responsive">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-1">
            <h5 class="my-2">Inventory logs</h5>          </div>
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
                <th>Action</th> 
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
                <td></td>
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
                <td></td>
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
                <td></td>
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
                <td></td>
              </tr>
            </tbody>
          </table>

        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>