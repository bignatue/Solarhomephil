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
          <h5 class="my-2">Edit Account</h5>
          <hr class="my-2">
          <form class="mb-5">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Full Name</label>
                  <input type="text" class="form-control form-control-sm" value="Brian Bantigue">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Address</label>
                  <textarea  class="form-control form-control-sm">Manila Philippines</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Contact Number</label>
                  <input type="text" class="form-control form-control-sm" value="123 456 789">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Email Address</label>
                  <input type="email" class="form-control form-control-sm" value="bignatue@gmail.com">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Username</label>
                  <input type="text" class="form-control form-control-sm" value="myusername">
                </div>  
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Password</label>
                  <input type="password" class="form-control form-control-sm" value="********">
                </div>  
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Confirm password</label>
                  <input type="password" class="form-control form-control-sm" value="********">
                </div>       
                <a class="btn btn-primary btn-block btn-sm" href="#" role="button">Submit</a>
              </div>
            </div>
          </form> 
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>