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
        <h5 class="my-2">Add Stock</h5>
        <form>     

          <div class="row">
            <div class="col-sm-10">
              <table class="table table-sm table-borderless mb-0">
                <tr>
                  <th>Product name</th>
                  <th>Qty</th>
                </tr>
                <tr>
                  <td>
                    <input type="text" name="" class="form-control form-control-sm">
                  </td>
                  <td>
                    <input type="text" name="" class="form-control form-control-sm">
                  </td>
                </tr>
              </table>
              
              <div class="px-1">
                <a href="" class="btn btn-link pl-0">+ add more</a>
                <hr>              
                <a class="btn btn-primary btn-sm" href="#" role="button">Save</a>
              </div>

            </div>
          </div>
         

        </form> 
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>