<div class="w3_login">
			<h3>Sign Up</h3>
			<div class="w3_login_module">
				<div class="module form-module">
				  <!-- <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
                  </div> -->
				  <div class="form">
                    <h2>Login to your account</h2>
                    <form action="#" method="post">
					  <input type="text" name="email" placeholder="Email" id="email" value="<?= set_value('email') ?>" required=" ">
					  <input type="password" name="Password" placeholder="Password" id="password" required=" " value="<?= set_value('password') ?>">
					  <input type="submit" value="Login">
                    </form>
				  </div>
				  <div class="form">
					<h2>Create an account</h2>
					<?= validation_errors()?>
                    <?= form_open(base_url('home/register')) ?>
					  <input type="text" name="Username" placeholder="Username" required=" ">
					  <input type="password" name="Password" placeholder="Password" required=" ">
					  <input type="email" name="Email" placeholder="Email Address" required=" ">
					  <input type="text" name="Phone" placeholder="Phone Number" required=" ">
					  <input type="submit" value="Register">
					<?= form_close() ?>
				  </div>
				  <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>