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
          <div class="row justify-content-end mt-4">
            <div class="col-2">
              <a class="btn btn-primary btn-block btn-sm" href="" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Print</a>
            </div>
          </div>
          <hr>
          <form>
            <h5>Mark Smith</h5>
            <p class="mb-1"><img src="img/telephone.png" width="16"> 0927 000 0000</p>
            <p class="mb-1"><img src="img/close-envelope.png" width="16"> email@domain.com</p>
            <div class="row mt-2">
              <div class="col-md-4"><img src="img/placeholder.png" width="16"> 40 Level ABC Building, BGC, Taguig City</div>
              <div class="col-md-2 offset-md-6">Date: Jan 25 2018</div>
            </div>

            <h5 class="mb-0 mt-4 mb-2">Product Details</h5>
            <table class="table table-striped table-bordered table-sm">
              <thead>
                <tr>
                  <th>Serial No.</th>
                  <th>Description</th>
                  <th>Selling Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>12345</td>
                  <td>Canadian Solar</td>
                  <td>₱100 000.00</td>
                  <td>1</td>
                  <td>₱100 000.00</td>
                </tr> 
              </tbody>
            </table>

            <div class="row justify-content-end">               
              <div class="col-2">                
                <label for="exampleFormControlSelect1">Payment type</label>
                <p class="border-bottom pb-1">Cash</p>
              </div>
              <div class="col-2">
                <label for="exampleFormControlSelect1 font-weight-bold">Sub Total</label>
                <p class="text-danger border-bottom pb-1">₱200 000.00</p>
              </div> 
            </div>
          </form>
          <hr>
          <div class="row mt-2">
            <div class="col-md-6">
              <h5 class="mb-1">Solar Home Phil Corp.</h5>
              <p class="mb-1"><img src="img/telephone.png" width="16" class="mr-2"> 0906-948-4229 942-9189</p>
            </div>
            <div class="col-md-6">
              <p class="mb-1"><img src="img/close-envelope.png" width="16" class="mr-2"> info@solarhomephil.com</p>
              <p><img src="img/placeholder.png" width="16" class="mr-2"> #3 Blue Falcon Street, Aranai C5 Road, Taguig City Philippines</p>
            </div>
          </div>

      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>