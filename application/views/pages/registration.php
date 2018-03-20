
<?php include 'links.php';?>

<body>

<?php
if($this->session->userdata('logged_in')) {
    include 'loggedHeader.php';
}else{
    include 'header.php';
};
?>
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Create Account</li>
</ol>
<div class="column">


    <!-- register -->
	<div class="register">
		<div class="container">
			<h2>Register Here</h2>
            <br>
            <div  id="pheader">
                <h6 class="page-title">
                    <?php if (validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <strong>Error !</strong> <?php echo validation_errors(); ?>
                        </div>
                    <?php else:?>
                        <?php  if ($this->session->flashdata('msg')):?>
                            <?php echo '<p class="alert alert-success">'.$this->session->flashdata('msg').'</p>';?>
                        <?php endif; ?>

                    <?php endif;?>
                </h6>
            </div>
            <div class="login-form-grids">
				<h5>profile information</h5>

<!--                --><?php //echo validation_errors();?>
                <?php echo form_open('UserControll/registerUser')?>
                <input type="text" placeholder="First Name..." name="fname" maxlength="20" required>
                <input type="text" placeholder="Last Name..." name="lname" maxlength="20" required>

			
				    <h6>Login information</h6>
                <input type="email" placeholder="Email Address" name="email" maxlength="25" required>
                <input type="password" placeholder="Password" name="pwd" minlength="8" maxlength="10" required>
                <input type="password" placeholder="Password Confirmation" minlength="8" maxlength="10" name="cpwd" required>
					<!--<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox" required><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
					-->
                <input type="submit" value="Register">

				<?php echo form_close();?>

			</div>
        </div>
			<!-- <div class="register-home">
				<a href="home">Home</a>
			</div> -->
    </div>
    </div>
<!-- //register -->



<?php include 'footer.php';?>


</body>
</html>