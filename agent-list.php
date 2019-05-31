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
            <h5 class="my-2">Agent List</h5>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <input type="text" name="" class="form-control form-control-sm" placeholder="Search agent...">
              </div>
            </div>
          </div>
          <table class="table table-sm">
            <thead>
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact #</th>
                <th>Email Address</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Brian</td>
                <td>Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
              <tr>
                <td>Brian</td>
                <td>Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
              <tr>
                <td>Brian</td>
                <td>Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
              <tr>
                <td>Brian</td>
                <td>Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
              <tr>
                <td>Brian</td>
                <td>Bantigue</td>
                <td>09275075391</td>
                <td>bignatue@gmail.com</td>
                <td>7306 Escudo Lane, Villanueva Village, Brngy San Dionisio, Paranaque City</td>
                <td><a href="" class="mr-2">Edit</a> <a href="">Delete</a></td>
              </tr>
            </tbody>
          </table>
          
          <p>5 total number of agent</p>
        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>