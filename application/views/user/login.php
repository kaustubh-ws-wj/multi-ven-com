<!--start-single-heading-banner-->
<div class="single-banner-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center">
				<div class="single-ban-top-content">
					<p>Login</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end-single-heading-banner-->
<!--start-single-heading-->
<div class="signle-heading login-m">
	<div class="container">
		<div class="row">
			<!--start-shop-head -->
			<div class="col-lg-12">
				<div class="shop-head-menu">
					<ul>
						<li><i class="fa fa-home"></i><a class="shop-home" href="index.html"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
						<li class="shop-pro">Login</li>
					</ul>
				</div>
			</div>
			<!--end-shop-head-->
		</div>
	</div>
</div>
<!--end-single-heading-->
<!-- login-area start -->
<div class="login-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-content banner-r-b">
					<h2 class="login-title">Login</h2>
					<p>Hello,Welcome to your account</p>
					<div class="social-sign">
						<a class="banner-r-b" href="#"><i class="fa fa-facebook"></i> Sign in with facebook</a>
						<a class="twitter" href="#"><i class="fa fa-twitter"></i> Sign in with twitter</a>
					</div>
					<form action="<?php echo base_url();?>home/login/do_login" method="POST">
						<div class="form-group">
							<label>Email Address</label>
							<input class="form-control" id="lemail" type="text" name="email" placeholder="Email"/>
							<span id="err_lemail" style="color:red;"></span>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" id="lpassword" name="password" placeholder="Password"/>
							<span id="err_lpassword" style="color:red;"></span>
						</div>
						<div class="login-lost">
							<span class="log-rem">
								<input class="form-control" name="remember_me" type="checkbox" />
								<label>Remember me!</label>
							</span>
							<span class="forgot-login">
								<a href="#">Forgot your password?</a>
							</span>
						</div>
						<button class="login-sub">Login</button>
					</form>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-content login-margin">
					<h2 class="login-title">create a new account</h2>
					<p>Create your own Unicase account.</p>
					<form action="<?php echo base_url();?>home/register/do_register" method="POST">
						
						<div class="form-group">
							<label>First Name</label>
							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" />
							<span id="err_fname" style="color:red;"></span>
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
							<span id="err_lname" style="color:red;"></span>
						</div>
						<div class="form-group">
							<label>Email Address</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
							<span id="err_email" style="color:red;"></span>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
							<span id="err_pass" style="color:red;"></span>
						</div>
						<div class="form-group">
							<label>Confirm Password</label>
							<input type="password" class="form-control" id="cnf_password" name="cnf_password" placeholder="Confirm Password"/>
							<span id="err_cnf_pass" style="color:red;"></span>
						</div>
						<div class="form-group" id="register-as">
							<label>Register As</label>
							<select class="form-control" name="cust_type" id="cust_type">
								<option value="">-- Select Type --</option>
								<option value="customer">Customer</option>
								<option value="vendor">Vendor</option>
							</select>
							<span id="err_cust_type" style="color:red;"></span>
						</div>
						<div class="form-group" id="ven-cat" style="display:none;">
							<label>Vendor Category</label>
							<select class="form-control" name="vendor_type" id="ven_type">
								<option value="">-- Select Vendor Category --</option>
								<option value="1">Costume Designer</option>
								<option value="2">T-shirt Maker</option>
								<option value="3">T-shirt Seller</option>
							</select>
							<span id="err_ven_type" style="color:red;"></span>
						</div>
						<button class="login-reg">Sign Up</button>
					</form>
					<div class="sign-up-today">
						<h2 class="login-title">sign up today and you'll be able to:</h2>
						<ul>
							<li>
								<span>
									<i class="fa fa-check-square-o"></i>
									<span>speed your way through the checkout</span>
								</span>
							</li>
							<li>
								<span>
									<i class="fa fa-check-square-o"></i>
									<span>track your order easily</span>
								</span>
							</li>
							<li>
								<span>
									<i class="fa fa-check-square-o"></i>
									<span>keep a record of your all purchase</span>
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- login-area end -->
<!--Start-brand-area-->
<div class="brands-area login-brand">
	<div class="container">
		<!--barand-heading-->
		<div class="brand-heading text-center">
			<h2>Popular brands</h2>
		</div>
		<!--brand-heading-end-->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="brands-carousel">
					<!--start-single-brand-->
					<div class="single-brand">
						<a href="#"><img src="<?php echo USERASSETS ?>images/brands/1.png" alt=""></a>
					</div>
					<!--end-single-brand-->
					<!--start-single-brand-->
					<div class="single-brand">
						<a href="#"><img src="<?php echo USERASSETS ?>images/brands/2.png" alt=""></a>
					</div>
					<!--end-single-brand-->
					<!--start-single-brand-->
					<div class="single-brand">
						<a href="#"><img src="<?php echo USERASSETS ?>images/brands/3.png" alt=""></a>
					</div>
					<!--end-single-brand-->
					<!--start-single-brand-->
					<div class="single-brand">
						<a href="#"><img src="<?php echo USERASSETS ?>images/brands/4.png" alt=""></a>
					</div>
					<!--end-single-brand-->
					<!--start-single-brand-->
					<div class="single-brand">
						<a href="#"><img src="<?php echo USERASSETS ?>images/brands/1.png" alt=""></a>
					</div>
					<!--end-single-brand-->
					<!--start-single-brand-->
					<div class="single-brand">
						<a href="#"><img src="<?php echo USERASSETS ?>images/brands/2.png" alt=""></a>
					</div>
					<!--end-single-brand-->
					<!--start-single-brand-->
					<div class="single-brand">
						<a href="#"><img src="<?php echo USERASSETS ?>images/brands/3.png" alt=""></a>
					</div>
					<!--end-single-brand-->
				</div>
			</div>
		</div>
	</div>
</div>
<!--End-brand-area-->