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
            <h5 class="my-2">Client List</h5>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <input type="text" name="" class="form-control form-control-sm" placeholder="Search agent...">
                 <select class="form-control form-control-sm ml-1">
                    <option value="" disabled selected hidden>Select client type...</option>
                    <option value="1">Regular</option>
                    <option value="2">Reseller</option>
                    <option value="3">Destributor</option>
                  </select>
              </div>
            </div>
          </div>
          <table class="table table-sm">
            <thead>
              <tr>
                <th>Name</th>
                <th>Contact #</th>
                <th>Email Address</th>
                <th>Address</th>
                <th>Client Type</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Brian Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td>Regular</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
              <tr>
                <td>Brian Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td>Reseller</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
              <tr>
                <td>Brian Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td>Regular</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
              <tr>
                <td>Brian Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td>Destributor</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
              <tr>
                <td>Brian Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td>Regular</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr class="border-white mb-1">
        <div class="row">
          <div class="col-sm-2">3 Regular</div>
          <div class="col-sm-2">1 Reseller</div>
          <div class="col-sm-2">1 Distributor</div>
          <div class="col-sm-6">5 Total number of Client</div>
        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>