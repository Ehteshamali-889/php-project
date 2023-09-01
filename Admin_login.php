

    <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-title text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="d-flex flex-column text-center">
                        <form method="POST" action="adminLoginaction.php" >
                            <div class="form-group">
                                <label for="key">Enter Your CNIC</label>
                                <input type="integer" class="form-control" id="key" name="key" data-inputmask="'mask': '99999-9999999-9'"  placeholder="XXXXX-XXXXXXX-X">
                            </div>
                            <div class="form-group">
                                <label for="password">Enter Your Password </label>
                                <input type="password" class="form-control" id="password1"  name="password1" placeholder="Admin password...">
                            </div>
                            <button type="submit" class="btn btn-info btn-block btn-round">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
