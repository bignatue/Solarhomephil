<?php include'include/header.php'; ?>
<div class="container"> 

  <div class="d-flex justify-content-center">
    <div class="col-sm-6 register">
      <h1 class="h3 mb-1 font-weight-normal text-center">REGISTER</h1>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Full Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control form-control-sm" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Address</label>
        <textarea  class="form-control form-control-sm"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Contact Number</label>
        <input type="text" class="form-control form-control-sm">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Email Address <span class="text-danger">*</span></label>
        <input type="email" class="form-control form-control-sm" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Username <span class="text-danger">*</span></label>
        <input type="text" class="form-control form-control-sm">
      </div>  
      <div class="form-group">
        <label for="exampleFormControlSelect1">Password <span class="text-danger">*</span></label>
        <input type="password" class="form-control form-control-sm" required>
      </div>  
      <div class="form-group">
        <label for="exampleFormControlSelect1">Confirm password <span class="text-danger">*</span></label>
        <input type="password" class="form-control form-control-sm" required>
      </div>       
      <a class="btn btn-primary btn-block btn-sm" href="#" role="button">Submit</a>
    </div>
  </div>

</div>
<?php include'include/footer.php'; ?>