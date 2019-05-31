<?php 
  include'include/header.php';
  include'include/topmenu.php';
?>

  <div class="container-fluid">
    <div class="row">
      <!-- side menu -->
      <?php include'include/sidenav.php'; ?>

      <!-- content start -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 pb-5">
          <h5 class="my-2">Client Details</h5>
          <form>
          <div class="my-3">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
              <label class="form-check-label" for="exampleRadios1">
                Complete
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Incomplete
                </label>
              </div>
            </div> 

            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label class="mb-0">First Name</label>
                  <input type="text" class="form-control form-control-sm">
                </div>
                <div class="col">
                  <label class="mb-0">Last Name</label>
                  <input type="text" class="form-control form-control-sm">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label class="mb-0">Contact Number</label>
                  <input type="text" class="form-control form-control-sm">
                </div>
                <div class="col">
                  <label class="mb-0">Email Address</label>
                  <input type="email" class="form-control form-control-sm">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col">
                  <label class="mb-0">Client Type</label>               
                  <select class="form-control form-control-sm">
                    <option value="" disabled selected hidden>Choose...</option>
                    <option value="1">Regular</option>
                    <option value="2">Reseller</option>
                    <option value="3">Destributor</option>
                  </select>
              </div>
              <div class="col">
                <div class="form-group">
                  <label class="mb-0">Address</label>
                  <textarea class="form-control form-control-sm" rows="1"></textarea>
                </div>
              </div>
            </div>
            
            <h5 class="mb-0">Product Details</h5>
            <div class="row">
              <div class="col-sm-2">
                <div class="form-group">
                  <label class="mb-0">Serial No.</label>
                  <input type="text" class="form-control form-control-sm">
                </div>
              </div>
              <div class="col-sm-3">
                <div class="form-group">
                  <label class="mb-0">Description</label>
                  <input type="text" class="form-control form-control-sm">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <label class="mb-0">Regular Price</label>
                  <input type="text" class="form-control form-control-sm">
                </div>
              </div>
              <div class="col-sm-1">
                <div class="form-group">
                  <label class="mb-0">Quantity</label>
                  <input type="text" class="form-control form-control-sm">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <label class="mb-0">Selling Price</label>
                  <input type="text" class="form-control form-control-sm">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="form-group">
                  <label class="mb-0">Line Total</label>
                  <p class="border-bottom py-1">₱00 000.00</p>
                </div>
              </div>
            </div>
            <div class="row justify-content-between">
              <div class="col-3">
                <a href="" class="btn btn-link pl-0">+ add product...</a>
              </div>
              <div class="col-4">
                <div class="row">
                  <div class="col-6">                
                    <label class="mb-0">Payment Type</label>
                    <select class="form-control form-control-sm">
                      <option value="" disabled selected hidden>Choose...</option>
                      <option value="1">Cash</option>
                      <option value="2">MT</option>
                      <option value="3">MR</option>
                      <option value="4">Check</option>
                    </select>
                </div>
                <div class="col-6">
                  <label class="mb-0">Sub Total</label>
                  <p class="text-danger border-bottom py-1">₱00 000.00</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-end">
            <div class="col-4">
              <div class="row">
                <div class="col-6">                
                  <label class="mb-0">Down payment</label>
                  <input type="text" name="" class="form-control form-control-sm">                  
                </div>
                <div class="col-6">
                  <label class="mb-0">Advance</label>
                  <p class="text-danger border-bottom py-1">₱00 000.00</p>
                </div>
              </div>
            </div>
          </div>

          <hr class="mt-1 border-white">
          <div class="row justify-content-end">
            <div class="col-4">
              <a class="btn btn-primary btn-block btn-sm" href="receipt.php" role="button">Submit/View Sample Receipt</a>
            </div>
          </div>
          </form>
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>