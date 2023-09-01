<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
  
</head>
<body>
  

  <div class="modal fade" id="custmorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-bottom-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-title text-center">
            <h4>Login to User Account</h4>
          </div>
          <div class="d-flex flex-column text-center">
            <form method="POST" action="c_log_action.php" >
              <div class="form-group">
                <label for="user_cnic">Enter Your CNIC</label>
                <input type="varchar" class="form-control" id="user_cnic" name="user_cnic" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X">
              </div>
              <div class="form-group">
                <label for="user_password">Enter Your Password </label>
                <input type="password" class="form-control" id="user_password"  name="user_password" placeholder="User Password...">
              </div>
              <span id="error" class="text-danger font-weight-bold"></span>
              <button type="submit" name="" id="submit_btn" class="btn btn-info btn-block btn-round">Login</button>
            </form>
            <div class="modal-footer">
           
        <div class="signup-section">Creat Account... <a href="C_form.php" class="text-info"> Sign Up</a>.</div>
       
        </div>
        
      </div>

    </div>
  </div>
  <script> 
  $(document).ready(function(){
    $('input').inputmask();
  });

  
  $(document).ready(function()
 {
   $('#submit_btn').click(function(event)
   {
    //  console.log("reached");

          event.preventDefault();
      var cnic = $('#user_cnic').val();
      var password = $('#user_password').val();

          $.ajax
          ({
          type : 'POST',
          url : 'Userlogin_Form_validation.php',
          data:{
            'action': 1,
            'cnic' : cnic,
            'password': password
               },
              success : function(response)
              {
                  if(response == 1)
                  {
                    $('#error').html('Account valid...');

                        $("form").submit();
                  }
                    else
                    {
                        if(response == 0)
                        {
                          event.preventDefault();
                          $('#error').html(' Account is not valid  ...');
                          
                        }
                    }  
              }
    
          });
  });
});






   </script>
 </body>
</html>  

  
