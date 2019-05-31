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
        <div class="row">
          <div class="col-sm-5"><h5 class="my-3">FOR REMITTANCE REPORT</h5></div>
          <div class="col-sm-7 ">
            <h5 class="mt-3 h6 text-right">
              <a href="" class="">‹‹ prev</a> <small>9/10/2018 - 9/22/2018</small> <a href="">next ››</a>
              <a class="btn btn-sm btn-outline-secondary dropdown-toggle mx-2"  id="filter-date" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Set cut off
              </a>         
              <!-- start of dropdown -->
              <div class="dropdown-menu px-2" aria-labelledby="filter-date">
                <div class="row ">
                  <div class="col-sm-6 mb-1">
                    <label class="mb-1">Start</label>
                    <input type="date" class="form-control form-control-sm" name="">
                  </div>
                  <div class="col-sm-6">
                    <label class="mb-1">End</label>
                    <input type="date" class="form-control form-control-sm" name="">
                  </div>
                </div>
                <button class="btn btn-sm btn-primary px-4">OK</button>
              </div><!-- end of dropdown -->              
              <button class="btn btn-sm btn-outline-secondary" onClick="window.print()">Print</button>
          </div>
        </div>
 
        <!-- start summary -->
        <div class="border p-1 mb-2">
          <div class="row justify-content-end ">
            <div class="col-md-6">
              <p class="mb-0">OCTOBER 18 2018 SALES REPORT</p>
            </div>
            <div class="col-md-2 col-sm-6">
              <p class="mb-0">Total Sales: <span class="text-danger">₱ 331,175.00</span></p>
            </div>
            <div class="col-md-2 col-sm-6">
              <p class="mb-0">Capital: <span class="text-danger">₱ 331,175.00</span></p>
            </div>
            <div class="col-md-2 col-sm-6">
              <p class="mb-0">Net Profit: <span class="text-danger">₱ 331,175.00</span></p>
            </div>
          </div>
        </div>
        <!-- end summary -->
        


        <!-- start of table -->
        <div class="table-responsive  mb-2">
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Customer Name</th>
                <th>Date</th>
                <th>Item Desciption</th>
                <th>Unit Price</th>
                <th>Qty</th>
                <th>Total Sales</th>
                <th>Selling Price</th>
                <th>Net</th>
                <th>Payment Type</th>
                <th>Remark/s</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>Geinger Herrera</td>
                <td>03/07/18</td>
                <td>REC 350 TP</td>
                <td>100</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>Check</td>
                <td></td>
              </tr>
              <tr>
                <td>2.</td>
                <td>High Energy</td>
                <td>03/07/18</td>
                <td>REC 260 Zlink</td>
                <td>100</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>Check</td>
                <td></td>
              </tr>
              <tr>
                <td>3.</td>
                <td>High Energy</td>
                <td>03/07/18</td>
                <td>REC 260 Zlink</td>
                <td>100</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>Check</td>
                <td></td>
              </tr>
              <tr>
                <td>4.</td>
                <td>High Energy</td>
                <td>03/07/18</td>
                <td>REC 260 Zlink</td>
                <td>100</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>Check</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- end of table -->

      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>