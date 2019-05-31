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
            <h5 class="my-2">Inventory logs <small class="ml-3"><a href="" class="text-white mr-2">‹‹ prev</a> 9/10/2018 - 9/22/2018<a href="" class="text-white ml-2">next ››</a>

              <a class="btn btn-link btn-sm dropdown-toggle p-0 ml-2"  id="filter-date" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Filter Settings
            </a>
            <div class="dropdown-menu filter-date-log" aria-labelledby="filter-date">
              <div class="row">
                <div class="col-sm-6">
                  <label>Choose month</label>
                  <select class="form-control form-control-sm mb-2">
                    <option>January</option>
                    <option>January</option>
                    <option>January</option>
                    <option>January</option>
                    <option>January</option>
                    <option>January</option>
                    <option>January</option>
                    <option>January</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label>Filter by week</label>
                  <select class="form-control form-control-sm mb-2">
                    <option>1 Week</option>
                    <option>2 Weeks</option>
                    <option>3 Weeks</option>
                    <option>4 Weeks</option>
                  </select>
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-6 text-right">
                  <button class="btn btn-sm btn-primary">OK</button>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <hr class="my-2">
                </div>
                <div class="col-sm-2 text-center">
                  <p>OR</p>
                </div>
                <div class="col-sm-5">
                  <hr class="my-2">
                </div>
              </div>
              <div class="row mb-1">
                  <div class="col-sm-6">
                    <label>From</label>
                    <input type="date" class="form-control form-control-sm" name="">
                  </div>
                  <div class="col-sm-6">
                    <label>End</label>
                    <input type="date" class="form-control form-control-sm" name="">
                  </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-sm-6 text-right">
                    <button class="btn btn-sm btn-primary">OK</button>
                  </div>
                </div>
            </div>
            </small>
            </h5>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-white">Print</button>
              </div>
            </div>
          </div>

          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Serial No.</th>
                <th>Product Name</th>
                <th>Date</th>
                <th>Transaction</th>
                <th>Remark/s</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>123</td>
                <td>Apple X</td>
                <td>11 Aug 2018</td>
                <td>New Item</td>
                <td>All good</td>
              </tr>
              <tr>
                <td>123</td>
                <td>Apple X</td>
                <td>11 Aug 2018</td>
                <td>New Stock</td>
                <td>All good</td>
              </tr>
              <tr>
                <td>123</td>
                <td>Apple X</td>
                <td>11 Aug 2018</td>
                <td>Warranty</td>
                <td>All good</td>
              </tr>
              <tr>
                <td>123</td>
                <td>Apple X</td>
                <td>11 Aug 2018</td>
                <td>Replacement</td>
                <td>All good</td>
              </tr>
              <tr>
                <td>123</td>
                <td>Apple X</td>
                <td>11 Aug 2018</td>
                <td>Sold</td>
                <td>All good</td>
              </tr>
            </tbody>
          </table>

        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>