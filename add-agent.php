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
        <h5 class="my-2">Add new agent</h5>
        <form>
          <div class="form-group">
            <div class="row">
              <div class="col">
                <label>First Name</label>
                <input type="text" class="form-control form-control-sm" placeholder="Mark">
              </div>
              <div class="col">
                <label>Last Name</label>
                <input type="text" class="form-control form-control-sm" placeholder="Smith">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col">
                <label>Contact Number</label>
                <input type="text" class="form-control form-control-sm" placeholder="0927 000 0000">
              </div>
              <div class="col">
                <label>Email Address</label>
                <input type="email" class="form-control form-control-sm" placeholder="email@domain.com">
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="col">
                <label for="exampleFormControlTextarea1">Address</label>
                <textarea class="form-control form-control-sm" rows="2" placeholder="40 Level ABC Building, BGC, Taguig City"></textarea>
              </div>
            </div>
          </div>
          <hr class="border-white mt-0">
          <div class="row justify-content-end">
            <div class="col-6">
              <a class="btn btn-primary btn-block btn-sm" href="agent-list.php" role="button">Submit</a>
            </div>
          </div>
        </form>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>