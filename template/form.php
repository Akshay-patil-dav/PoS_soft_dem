<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">
    <link rel="icon" href="./logo/Untitled design (1).png" type="image/icon type">
    <title>AUE</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>
     <!-- vendor css -->
      
     <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="../lib/spectrum-colorpicker/spectrum.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="../lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
    <link href="../lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
    <link href="../lib/pickerjs/picker.min.css" rel="stylesheet">

 
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> -->
</head>
<body>
    <?php
            require_once("./navbar/nav.php");
    ?>
    
    <style>
        .table-responsive{
            width:65% ;
            margin-left: 10cm;
            margin-top: 1cm;
        }
    </style>
    <!-- <hr class="mg-y-30"> -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-purple">Continue</button>
                      </div>
                    </div>
                  </div>
                </div>
                    <script>
                      $('#exampleModal').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget) // Button that triggered the modal
                      var recipient = button.data('whatever') // Extract info from data-* attributes
                      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                      var modal = $(this)
                      modal.find('.modal-title').text('Add New Spupplyer ' )
                      modal.find('.modal-body input').val(recipient)
                    })
                    </script>
        </div>
<!-- <div class="az-content-label mg-b-5">Striped Rows</div> -->
<!-- <p class="mg-b-20">Add zebra-striping to any table row.</p> -->
 <br><br>
<h5 style="margin-left: 9.9cm;" ><i class="typcn typcn-chart-area-outline"></i> 
 / Dashboard /Add items</h5>
<style>
    .box{
        margin-left: 9.9cm;
        margin-top: 2cm;
    }
</style>
    <div class="box">
        <div class="col-lg-4" style="display: flex; gap: 1cm; " >
            <div>
              <p class="mg-b-10">Select Supplier *</p>
              <select class="form-control select2-no-search" style="width: 5cm;" >
                <option label="Choose one"></option>
                <option value="Firefox">Firefox</option>
                <option value="Chrome">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera">Opera</option>
                <option value="Internet Explorer">Internet Explorer</option>
              </select>
            </div>
            <div style="margin-top: 0.8cm;" >
              <input type="button" class="btn btn-purple" placeholder="POS SELL" value="POS SELL"  data-toggle="modal" data-target="#exampleModal" >
            </div>
            </div><!-- col-4 -->

            

                    <br>
      
        <div style="display: flex ; gap: 1cm; margin-left: 0.4cm; " >
            <div>
            <p class="mg-b-10">Select Date *</p>
            <div class="wd-200 mg-b-20">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                </div>
              </div>
              <input type="text" class="form-control fc-datepicker" placeholder="MM/DD/YYYY">
            </div>
            </div>
          </div><!-- wd-200 -->

        <div >
              <p class="mg-b-10">Reference No</p>

          <div class="row row-sm" >
            <div class="col-lg">
              <input class="form-control" placeholder="Reference No" type="text"  >
            </div><!-- col -->
            </div>
        </div>

        <div >
              <p class="mg-b-10">Select Warehouse *</p>

          <div class="row row-sm" >
            <div class="col-lg">
              <!-- <input class="form-control" placeholder="Input box" type="text" required> -->
              <select class="form-control select2-no-search" style="width: 5cm;" >
                <option label="Choose one"></option>
                <option value="Firefox">Firefox</option>
                <option value="Chrome">Chrome</option>
                <option value="Safari">Safari</option>
                <option value="Opera">Opera</option>
                <option value="Internet Explorer">Internet Explorer</option>
              </select>
            </div><!-- col -->
            
            </div>
            
            </div>

            <div >
              <p class="mg-b-10">Status *</p>

          <div class="row row-sm" >
            <div class="col-lg">
              <!-- <input class="form-control" placeholder="Input box" type="text" required> -->
              <select class="form-control select2-no-search" style="width: 5cm;" >
                <option label="Choose one"></option>
                <option value="Firefox">Received</option>
                <option value="Chrome">Not Received</option>
                
              </select>
            </div><!-- col -->



            
            </div>
            
            
            </div>
            
           </div>



           
           <div class="row row-sm" style="margin-left: 5px;" >

            <div class="col-sm-7 col-md-6 col-lg-4">
            <p class="mg-b-10">Attach Doc </p>
              <div class="custom-file">
                
                <input type="file" >
                <!-- <label class="custom-file-label" for="customFile">Choose file</label> -->
              </div>
            </div><!-- col -->
            
          </div><!-- row -->
          <br><br>
          <div class="col-lg-4">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="25" fill="currentColor" class="bi bi-upc-scan" viewBox="0 0 16 16">
  <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0z"/>
</svg></span>
                </div>
                <!-- <input type="text" class="form-control" placeholder="Scan Code" aria-label="Username" aria-describedby="basic-addon1"> -->
       



                

              </div><!-- input-group -->
            </div><!-- col -->
        </div>
        
        
    </div>



    
    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/ionicons/ionicons.js"></script>
    <script src="../lib/jquery.maskedinput/jquery.maskedinput.js"></script>
    <script src="../lib/spectrum-colorpicker/spectrum.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script src="../lib/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="../lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
    <script src="../lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
    <script src="../lib/pickerjs/picker.min.js"></script>
    <script src="../js/jquery.cookie.js" type="text/javascript"></script>


</body>
</html>