<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
  
</head>
<body>


<!-- The Modal -->
<div class="modal fade" id="SPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="form-title text-center">
            <h4>Login into Buissness Account</h4>
          </div>
          <div class="d-flex flex-column text-center">
            <form id="Form_id" method="POST" action="sp_login_action.php">
              <div class="form-group">
                <input type="integer" class="form-control" id="cnic" name="cnic" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X" >
              <span id="error_cnic" class="text-danger"></span>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Your password...">
              
              </div>
              <span id="error_login" class="text-danger"></span>
              <button type="submit" name="" id="submitBtn" class="btn btn-info btn-block btn-round">Login</button>
            </form>
            
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
           
        <div class="signup-section">Start a Buissness? <a href="Sp_form.php" class="text-info"> Sign Up</a>.</div>
       
        </div>
        
      </div>
    </div>
  </div>
  
</div>

<script>
  $(document).ready(function()
  {
   $('input').inputmask();
  });



 $(document).ready(function()
 {
   $('#submitBtn').click(function(event)
   {
    //  console.log("reached");

       event.preventDefault();
      var cnic = $('#cnic').val();
      var password = $('#password').val();

          $.ajax
          ({
          type : 'POST',
          url : 'login_Form_validation.php',
          data:{
            'action': 1,
            'cnic' : cnic,
            'password': password
               },
              success : function(response)
              {
                if(response == 1)
                {
                  $('#error_login').html('Account valid...');

                       $("#Form_id").submit();
                }
                else
                {
                    if(response == 0)
                    {
                      event.preventDefault();
                      $('#error_login').html(' Account is not valid  ...');
                      
                    }
                }  
              }
    
          });
  });
});

</script>
</body>
</html>