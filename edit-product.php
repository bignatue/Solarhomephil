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
          <h5 class="my-2">Edit Product</h5>
          <form>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Product Code</label>
                  <input type="text" class="form-control form-control-sm" value="123">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Product Name</label>
                  <input type="text" class="form-control form-control-sm" value="Apple X">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Description</label>
                  <textarea  class="form-control form-control-sm">Blue casing</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Price</label>
                  <input type="text" class="form-control form-control-sm" value="$100">
                </div>       
                <a class="btn btn-primary btn-block btn-sm" href="#" role="button">Submit</a>
              </div>
            </div>
          </form> 
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>