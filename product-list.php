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
            <h5 class="my-2">Product List</h5>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group">
                <input type="text" name="" class="form-control form-control-sm" placeholder="Searh product...">
              </div>
            </div>
          </div>
          <table class="table table-sm">
            <thead>
              <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>123</td>
                <td>Apple X</td>
                <td>Blue casing</td>
                <td>
                  <a href="edit-product.php" class="btn btn-sm btn-secondary p-1">Edit</a>
                  <a href="" class="btn btn-sm btn-secondary p-1">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>