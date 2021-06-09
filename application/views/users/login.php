
<!-- login -->
		<div class="w3_login">
			<h3>Sign In</h3>
			<div class="w3_login_module">
				<div class="module form-module">
                <p class="alert-danger text-center">
                        <?php if($this->session->flashdata('error')): ?>
                            <?php echo $this->session->flashdata('error'); ?>
                        <?php endif ; ?>
                    </p>
				  <!-- <div class="toggle"><i class="fa fa-times fa-pencil"></i>
					<div class="tooltip">Click Me</div>
                  </div> -->
                    <div class="form">
                        <h2>Login to your account</h2>
                        <form action="<?php echo site_url('home/checkUser') ?>" method="post">
                            <input type="text" name="email" placeholder="Email" id="email" value="<?= set_value('email') ?>">
                            <input type="password" name="Password" placeholder="Password" id="password" value="<?= set_value('password') ?>">
                            <input type="submit" value="Login">
                        </form>
                    </div>
                    <div class="cta"><a href="#">Forgot your password?</a></div>
				</div>
			</div>
		</div>
<!-- //login -->
		</div>
		<div class="clearfix"></div>
	</div>