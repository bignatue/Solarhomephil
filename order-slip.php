<?php 
  include'include/header.php';
  include'include/topmenu.php';
?>

  <div class="container-fluid bg-light text-dark">
    <div class="row">
      <!-- side menu -->
      <?php include'include/sidenav.php'; ?>

      <!-- content start -->
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="row justify-content-end my-4">
            <div class="col-2">
              <a class="btn btn-primary btn-block btn-sm" href="" role="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
              Print</a>
            </div>
          </div>
          
          <div class="receipt">
          <hr class="receipt-divider">

          <table class="table table-bordered table-sm mb-0">
            <tbody>
              <tr>
                <td rowspan="3"><img src="img/solarhomephil.png" class="mt-2" width="100"></td>
                <td rowspan="3" class="text-center"><h3 class="mt-3">ORDER SLIP</h3></td>
                <td>Transaction No.:</td>
              </tr>
              <tr>
                <td>Date Issued:</td>
              </tr>
              <tr>
                <td>Date Delivery:</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered border-dark table-sm mb-0">
            <tbody>
              <tr>
                <td>Client Name:</td>
                <td>Consignee:</td>
              </tr> 
              <tr>
                <td>Contact Number:</td>
                <td>Contact Number:</td>
              </tr>
              <tr>
                <td>Address:</td>
                <td>Address:</td>
              </tr> 
            </tbody>
          </table>
          <table class="table table-bordered border-dark table-sm mb-0">
            <thead>
              <tr>
                <th>Qty</th>
                <th>Unit</th>
                <th>Description</th>
                <th>Serial Number</th>
                <th>Unit Price</th>
                <th width="110">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2</td>
                <td></td>
                <td>CSCK-270 P Canadian Solar</td>
                <td></td>
                <td>6500</td>
                <td>13000</td>
              </tr> 
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </tbody>
          </table>          
          <table class="table table-bordered border-dark table-sm mb-0">
            <tbody>
              <tr>
                <td rowspan="3">D.R. No.</td>
                <td width="320">Note:</td>
                <td class="text-right">Installation</td>
                <td width="110"></td>
              </tr>
              <tr>
                <td></td>
                <td class="text-right">Crates</td> 
                <td></td> 
              </tr> 
              <tr>
                <td></td>
                <td class="text-right">Transportation</td> 
                <td></td> 
              </tr> 
            </tbody>
          </table>       
          <table class="table table-bordered border-dark table-sm mb-0">
            <tbody>
              <tr>
                <td rowspan="5" width="40%">Pay mode:<br>
                  <div class="row">
                    <div class="col-md-12">
                      <input type="Checkbox" name="" value="option1" class="m-1"> Check / Check No.____________________________
                    </div>
                    <div class="col-md-6">
                      <input type="Checkbox" name="" value="option1" class="m-1"> Down Payment<br>
                      <input type="Checkbox" name="" value="option1" class="m-1"> BDO Deposit<br>
                      <input type="Checkbox" name="" value="option1" class="m-1"> Money Transfer
                    </div>
                    <div class="col-md-6">
                      <input type="Checkbox" name="" value="option1" class="m-1"> COD<br>
                      <input type="Checkbox" name="" value="option1" class="m-1"> Cash<br>
                      <input type="Checkbox" name="" value="option1" class="m-1"> Paid
                    </div>
                  </div>
                </td>
                <td width="320">Via:</td>
                <td rowspan="5" width="120" class="text-center"><h4 class="mt-3"><i>GRAND<br>TOTAL</i></h4></td>
                <td rowspan="5"><h1>P</h1></td>
              </tr>
              <tr>
                <td>De. Val.:</td> 
              </tr>
              <tr>
                <td>
                  Transport mode:<br>
                  Air <input type="Checkbox" name="" value="option1" class="ml-1 mt-1 mr-2">
                  Sea <input type="Checkbox" name="" value="option2 " class="ml-1 mt-1 mr-2">
                  Land <input type="Checkbox" name="" value="option3" class="ml-1 mt-1 mr-2">
                </td> 
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered border-dark table-sm mb-0">
            <tbody>
              <tr>
                <td>Approved By:</td>              
                <td>Prepared By:</td>
                <td>Checked By:</td>              
                <td>Delivered By:</td>
              </tr> 
            </tbody>
          </table>
          
          <hr class="receipt-divider">

          <table class="table table-bordered table-sm mb-0">
            <tbody>
              <tr>
                <td rowspan="3"><img src="img/solarhomephil.png" class="mt-2" width="100"></td>
                <td rowspan="3" class="text-center"><h3 class="mt-3">INVOICE</h3></td>
                <td>Transaction No.:</td>
              </tr>
              <tr>
                <td>Date Issued:</td>
              </tr>
              <tr>
                <td>Date Delivery:</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered border-dark table-sm mb-0">
            <tbody>
              <tr>
                <td>Client Name:</td>
                <td>Consignee:</td>
              </tr> 
              <tr>
                <td>Contact Number:</td>
                <td>Contact Number:</td>
              </tr>
              <tr>
                <td>Address:</td>
                <td>Address:</td>
              </tr> 
            </tbody>
          </table>
          <table class="table table-bordered border-dark table-sm mb-0">
            <thead>
              <tr>
                <th>Qty</th>
                <th>Unit</th>
                <th>Description</th>
                <th>Serial Number</th>
                <th>Unit Price</th>
                <th width="110">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2</td>
                <td></td>
                <td>CSCK-270 P Canadian Solar</td>
                <td></td>
                <td>6500</td>
                <td>13000</td>
              </tr> 
              <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>          
          <table class="table table-bordered border-dark table-sm mb-0">
            <tbody>
              <tr>
                <td rowspan="3">D.R. No.</td>
                <td width="320">Note:</td>
                <td class="text-right">Installation</td>
                <td width="110"></td>
              </tr>
              <tr>
                <td></td>
                <td class="text-right">Crates</td> 
                <td></td> 
              </tr> 
              <tr>
                <td></td>
                <td class="text-right">Transportation</td> 
                <td></td> 
              </tr> 
            </tbody>
          </table>       
          <table class="table table-bordered border-dark table-sm mb-0">
            <tbody>
              <tr>
                <td rowspan="5" width="40%">Pay mode:<br>
                  <div class="row">
                    <div class="col-md-12">
                      <input type="Checkbox" name="" value="option1" class="m-1"> Check / Check No.____________________________
                    </div>
                    <div class="col-md-6">
                      <input type="Checkbox" name="" value="option1" class="m-1"> Down Payment<br>
                      <input type="Checkbox" name="" value="option1" class="m-1"> BDO Deposit<br>
                      <input type="Checkbox" name="" value="option1" class="m-1"> Money Transfer
                    </div>
                    <div class="col-md-6">
                      <input type="Checkbox" name="" value="option1" class="m-1"> COD<br>
                      <input type="Checkbox" name="" value="option1" class="m-1"> Cash<br>
                      <input type="Checkbox" name="" value="option1" class="m-1"> Paid
                    </div>
                  </div>
                </td>
                <td width="320">Via:</td>
                <td rowspan="5" width="120" class="text-center"><h4 class="mt-3"><i>GRAND<br>TOTAL</i></h4></td>
                <td rowspan="5"><h1>P</h1></td>
              </tr>
              <tr>
                <td>De. Val.:</td> 
              </tr>
              <tr>
                <td>
                  Transport mode:<br>
                  Air <input type="Checkbox" name="" value="option1" class="ml-1 mt-1 mr-2">
                  Sea <input type="Checkbox" name="" value="option2 " class="ml-1 mt-1 mr-2">
                  Land <input type="Checkbox" name="" value="option3" class="ml-1 mt-1 mr-2">
                </td> 
              </tr>
            </tbody>
          </table>
          <table class="table table-bordered border-dark table-sm mb-0">
            <tbody>
              <tr>
                <td>Approved By:</td>              
                <td>Prepared By:</td>
                <td>Checked By:</td>              
                <td>Delivered By:</td>
              </tr> 
            </tbody>
          </table>

          <hr class="receipt-divider mb-5">
          </div>

      </main>
    </div>
  </div>
<?php include'include/footer.php'; ?>