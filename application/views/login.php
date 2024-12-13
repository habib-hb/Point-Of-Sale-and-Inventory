<div style="min-height: 525px;">
<div class="row">
<div class="col-sm-4 col-sm-offset-4" style="padding-top: 80px;">
<?php echo $this->session->flashdata('errorMessage') ?>
<?php echo $this->session->flashdata('successMessage') ?>
<?php echo form_open('login_con/login_validation') ?>
<center>
<h3>Login Panel</h3>
</center>
<div class="input-group form-group">
	<span class="input-group-addon"><i class="fa fa-user " aria-hidden="true"></i></span>
	<input id="username" type="text" class="form-control input-lg" name="username" placeholder="Username">
</div>
<div class="input-group form-group">
	<span class="input-group-addon"><i class="fa fa-key " aria-hidden="true"></i></span>
	<input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password">
</div>
<div class="form-group">
	<input type="submit" name="login" class="btn btn-success form-control" value="Login">
</div>
<?php echo form_close() ?>
</div>
</div>	

	<h2 style="text-align: center;">Credentials</h2><hr>

    <div class="container d-flex justify-content-center align-items-center vh-100" style="margin-bottom: 10px;">
        <div class="row text-center">
            <div class="col-md-3">
                <div class="border p-4" style="border-radius: 8px; border: 2px solid #000">
                    <h4 style="text-decoration: underline;">Admin</h4>
                    <p>User Name: <strong>admin</strong></p>
                    <p>Password: <strong>habibhb1230</strong></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="border p-4" style="border-radius: 8px; border: 2px solid #000">
                    <h4 style="text-decoration: underline;">Cashier</h4>
                    <p>User Name: <strong>cashier</strong></p>
                    <p>Password: <strong>habibhb1230</strong></p>
                </div>
            </div>

			<div class="col-md-3">
                <div class="border p-4" style="border-radius: 8px; border: 2px solid #000">
                    <h4 style="text-decoration: underline;">Accountant</h4>
                    <p>User Name: <strong>accountant</strong></p>
                    <p>Password: <strong>habibhb1230</strong></p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="border p-4" style="border-radius: 8px; border: 2px solid #000">
                    <h4 style="text-decoration: underline;">Clerk</h4>
                    <p>User Name: <strong>clerk</strong></p>
                    <p>Password: <strong>habibhb1230</strong></p>
                </div>
            </div>
            
        </div>
    </div>


</div>
