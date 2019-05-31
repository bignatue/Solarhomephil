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
            <h5 class="my-2">Sales Edit Logs</h5>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <input type="text" name="" class="form-control form-control-sm mr-2" placeholder="Searh name...">
                <input type="date" name="" class="form-control form-control-sm" placeholder="choose date">
              </div>
            </div>
          </div>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Client Name</th>
                <th>Date Purchase</th>
                <th>Transaction No.</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jason Smith</td>
                <td>11 Aug 2018</td>
                <td>12345</td>
                <td>
                  <a href="sales-edit-details.php" class="btn btn-link btn-sm p-0 mr-1">View</a>
                </td>
              </tr>
              
            </tbody>
          </table>

        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>