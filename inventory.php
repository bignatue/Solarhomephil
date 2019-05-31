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
        <div class="row justify-content-end">
          <div class="col-md-2">

            <div class="d-flex justify-content-end align-items-center pt-1">
              <a class="btn btn-link btn-sm dropdown-toggle p-0 ml-2"  id="filter-date" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Settings
            </a>
            <div class="dropdown-menu filter-stocks" aria-labelledby="filter-date">
              <h5>Filter Stock</h5>
              <hr class="my-1">
               <input type="checkbox" name="" class="mr-2">
                <label><small>SHOW OLD STOCK</small></label>
                <p class="mb-0"><label class="mb-0">Select Year</label></p>
                <div class="row">
                  <div class="col-md-6 pt-0">
                    <label class="mb-0"><small>From:</small></label>
                    <select class="form-control form-control-sm mb-2">
                      <option>2018</option>
                      <option>2017</option>
                      <option>2016</option>
                      <option>2015</option>
                      <option>2014</option>
                      <option>2013</option>
                      <option>2012</option>
                      <option>2011</option>
                      <option>2010</option>
                    </select>
                  </div>
                  <div class="col-md-6 pt-0">
                    <label class="mb-0"><small>To:</small></label>
                    <select class="form-control form-control-sm mb-2">
                      <option>2018</option>
                      <option>2017</option>
                      <option>2016</option>
                      <option>2015</option>
                      <option>2014</option>
                      <option>2013</option>
                      <option>2012</option>
                      <option>2011</option>
                      <option>2010</option>
                    </select>
                  </div>
                </div>

                <button class="btn btn-sm btn-primary btn-block">Search</button>
              </div> 
            </div>

          </div>
        </div>
        <div class="table-responsive">

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-1">
            <h5 class="my-2">Inventory Report</h5>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <input type="text" name="" class="form-control form-control-sm mr-2" placeholder="Searh product...">
              </div>
                <button class="btn btn-sm btn-outline-white">Print</button>
            </div>
          </div>
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Serial No.</th>
                <th>Product Name</th>
                <th>Stock</th>
                <th>Sold</th>
                <th>Return/Replace</th>
                <th>For warranty</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>123</td>
                <td>Apple X</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
              </tr>
            </tbody>
          </table>

        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>