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
            <h5 class="my-2">Sales Report <small class="ml-3">9/1/2018 - 9/8/2018 = 8 Day</small></h5>
            <div class="btn-toolbar mb-2 mb-md-0">
              From <input type="date" value="Select date" class="mx-2">
              To <input type="date" value="Select date" class="mx-2">
              <div class="btn-group">
                <button class="btn btn-sm btn-outline-white">Print</button>
              </div>
            </div>
          </div>

          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Date Purchase</th>
                <th>Description</th>
                <th>Serial No.</th>
                <th>Qty</th>
                <th>L-Cost</th>
                <th>Total Sales</th>
                <th>Net</th>
                <th>Agent Name</th>
                <th>Cleint Type</th>
                <th>Commission</th>
                <th>Payment Type</th>
                <th>Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="3">Amatera Solar</td>
                <td rowspan="2">11 Aug 2018</td>
                <td>Axpert VM II 3kva 24v</td>
                <td>12345</td>
                <td>1</td>
                <td>₱15 890</td>
                <td>₱32 000</td>
                <td>₱16 110</td>
                <td rowspan="3">Brian</td>
                <td rowspan="3">Regular</td>
                <td>P100</td>
                <td>Cash</td>
                <td>Cleared</td>
              </tr> 
              <tr> 
                <td>Canadian Solar</td>
                <td>12346</td>
                <td>1</td>
                <td>₱1000</td>
                <td>₱1000</td>
                <td>₱1000</td>
                <td>P100</td>
                <td>Cash</td>
                <td>Cleared</td>
              </tr> 
              <tr> 
                <td>13 Aug 2018</td>
                <td>Australian Solar</td>
                <td>12346</td>
                <td>1</td>
                <td>₱1000</td>
                <td>₱1000</td>
                <td>₱1000</td>
                <td>P100</td>
                <td>Cash</td>
                <td>Cleared</td>
              </tr> 
              <tr class="font-weight-bold border-bottom">
                <td colspan="5">Total</td>
                <td>₱15 890</td>
                <td>₱32 000</td>
                <td>₱16 110</td>
                <td colspan="2"></td>
                <td>₱100</td>
                <td colspan="2"></td>
              </tr>
            </tbody>
          </table>
 
          <!-- Start Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-dark" id="exampleModalLabel">Assign to agent</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <input type="text" name="" class="form-control" placeholder="Enter agent name...">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary btn-sm">Assign</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modal -->
          
          <div class="w-100 text-right mb-1">
            <a type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Assign to agent</a>
          </div>
          <table class="table table-bordered table-sm">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Date Purchase</th>
                <th>Description</th>
                <th>Serial No.</th>
                <th>Qty</th>
                <th>L-Cost</th>
                <th>Total Sales</th>
                <th>Net</th>
                <th>Agent Name</th>
                <th>Cleint Type</th>
                <th>Commission</th>
                <th>Payment Type</th>
                <th>Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td rowspan="3">Amatera Solar</td>
                <td rowspan="2">11 Aug 2018</td>
                <td>Axpert VM II 3kva 24v</td>
                <td>12345</td>
                <td>1</td>
                <td>₱15 890</td>
                <td>₱32 000</td>
                <td>₱16 110</td>
                <td rowspan="3"></td>
                <td rowspan="3">Auto reflect</td>
                <td>P100</td>
                <td>Cash</td>
                <td>Cleared</td>
              </tr> 
              <tr> 
                <td>Canadian Solar</td>
                <td>12346</td>
                <td>1</td>
                <td>₱1000</td>
                <td>₱1000</td>
                <td>₱1000</td>
                <td>P100</td>
                <td>Cash</td>
                <td>Cleared</td>
              </tr> 
              <tr> 
                <td>13 Aug 2018</td>
                <td>Australian Solar</td>
                <td>12346</td>
                <td>1</td>
                <td>₱1000</td>
                <td>₱1000</td>
                <td>₱1000</td>
                <td>P100</td>
                <td>Cash</td>
                <td>Cleared</td>
              </tr> 
              <tr class="font-weight-bold border-bottom">
                <td colspan="5">Total</td>
                <td>₱15 890</td>
                <td>₱32 000</td>
                <td>₱16 110</td>
                <td colspan="2"></td>
                <td>₱100</td>
                <td colspan="2"></td>
              </tr>
            </tbody>
          </table>

        </div>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>