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
        <h5 class="my-4">Return / Replace</h5>
        <form>             
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Product Code:</label>
                <input type="text" class="form-control form-control-sm mb-2" value="123" autocomplete>
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Product name *</label>
                <input class="form-control form-control-sm" type="text" placeholder="Apple X" readonly>
              </div> 
              <div class="form-group">
                <label for="exampleFormControlSelect1">Quantity *</label>
                <input type="text" class="form-control form-control-sm mb-2" value="1">
              </div> 
              <div class="form-group">
                <label for="exampleFormControlSelect1">Remarks</label>
                <textarea class="form-control form-control-sm" placeholder="Enter your remarks..."></textarea>
              </div> 

              <!-- alert for success 
              <div class="alert alert-sm alert-success border-0 rounded-0 p-2" role="alert">
                Product has been successfuly submited!
              </div>     
               alert for success 
              <div class="alert alert-sm alert-danger border-0 rounded-0 p-2" role="alert">
                Oops somethign went wrong!
              </div> -->

              <a class="btn btn-primary btn-sm px-5" href="#" role="button">Submit</a>
            </div> 
          </div>          
        </form> 
      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>