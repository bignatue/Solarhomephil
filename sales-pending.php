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
            <h5 class="my-2">Sales Report <small>9/1/2018 - 9/8/2018 = 8 Day</small></h5>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-white">Print</button>
              </div>
              <button class="btn btn-sm btn-outline-white dropdown-toggle">
                
                Select date
              </button>
            </div>
          </div>
 
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Date Purchase</th>
                <th>Description</th> 
                <th>Unit Price</th>
                <th>Qty</th>
                <th>Total Sales</th>
                <th>Selling Price</th>
                <th>Net</th>
                <th>Agent Name</th>
                <th>Cleint Type</th>
                <th>Commission</th>
                <th>Payment</th>
                <th>Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="3">Amatera Solar</td>
                <td rowspan="2">11 Aug 2018</td>
                <td>Axpert VM II 3kva 24v</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td rowspan="3">Mark Villar</td>
                <td rowspan="3">Destributor</td>
                <td>P100</td>
                <td rowspan="3">Check</td>
                <td rowspan="3">
                  <div class="dropdown">
                    <a class="btn btn-secondary btn-sm p-0 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Pending
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Cleared</a>
                      <a class="dropdown-item"  href="#" data-toggle="modal" data-target="#updatepayment">Update payment</a>
                    </div>
                  </div>
                </td>
              </tr> 
              <tr> 
                <td>Canadian Solar</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>P100</td>
              </tr> 
              <tr> 
                <td>13 Aug 2018</td>
                <td>Australian Solar</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>P100</td>
              </tr> 
              <tr class="font-weight-bold border-bottom">
                <td colspan="5">Total</td>
                <td>1</td>
                <td></td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>

              <!-- modal -->
              <div class="modal fade" id="updatepayment" tabindex="-1" role="dialog" aria-labelledby="updatepayment" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-secondary" id="exampleModalLabel">Update Payment</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <label class="text-secondary">Enter remark</label>
                      <textarea class="form-control form-control-sm" placeholder="Ex: Additional payment of ₱300,000.00"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-sm btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>