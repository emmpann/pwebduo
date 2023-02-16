
<div class="main">
	<!-- Sing in  Form -->
	<section class="sign-in">
		<div class="container">
			<div class="signin-content">
				<div class="signin-image">
					<figure><img src="<?= base_url('assets/'); ?>images/signin-image.jpg" alt="sign up image"></figure>
					<a href="<?= base_url('register'); ?>" class="signup-image-link">Create an account</a>
				</div>

				<div class="signin-form">
					<h2 class="form-title">Sign in</h2>
					<form method="POST" class="register-form" id="login-form">
						<div class="form-group">
							<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
							<input type="text" name="email" id="email" placeholder="Email address" />
						</div>
						<div class="form-group">
							<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
							<input type="password" name="password" id="password" placeholder="Password" />
						</div>
						<div class="form-group form-button">
							<input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
						</div>
					</form>
					<div class="social-login">
						<span class="social-label">Or login with</span>
						<ul class="socials">
							<li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
							<li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
							<li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>