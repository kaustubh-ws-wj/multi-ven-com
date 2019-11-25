<!--Start-Header-area-->
<header>
	<div class="header-top-wrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="header-top-left">
						<!--Start-Header-language-->
						<div class="dropdown top-language-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-language dropdown-toggle" href="#"> <img src="<?php echo USERASSETS ?>images/flag/e.png" alt="language"> English <span class="caret"></span> </a>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation"><a role="menuitem" href="#"><img src="<?php echo USERASSETS ?>images/flag/e.png" alt="language"> English </a></li>
								<li role="presentation"><a role="menuitem" href="#"><img src="<?php echo USERASSETS ?>images/flag/f.png" alt="language"> French </a></li>
								<li role="presentation"><a role="menuitem" href="#"><img src="<?php echo USERASSETS ?>images/flag/g.png" alt="language"> German </a></li>
							</ul>
						</div>
						<!--End-Header-language-->
						<!--Start-Header-currency-->
						<div class="dropdown top-currency-wrap"> <a role="button" data-toggle="dropdown" data-target="#" class="top-currency dropdown-toggle" href="#"><span class="usd-icon"><i class="fa fa-usd"></i></span> USD <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li role="presentation"><a role="menuitem" href="#"> $ - Dollar </a></li>
								<li role="presentation"><a role="menuitem" href="#"> £ - Pound </a></li>
								<li role="presentation"><a role="menuitem" href="#"> € - Euro </a></li>
							</ul>
						</div>
						<!--End-Header-currency-->
						<!--Start-welcome-message-->
						<div class="welcome-mg hidden-xs"><span>Default Welcome Message!</span></div>
						<!--End-welcome-message-->
					</div>
				</div>
				<!-- Start-Header-links -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="header-top-right">
						<div class="top-link-wrap">
							<div class="single-link">
								<?php if(isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'yes')){ 
										if(isset($_SESSION['is_vendor']) && ($_SESSION['is_vendor'] == 'yes')){
								?>
										<div class="my-account"><a href="<?php echo base_url() ?>vendor/dashboard"><span class="">My Account</span></a></div>
								<?php }else{ ?>
										<div class="my-account"><a href="<?php echo base_url() ?>home/my_orders"><span class="">My Account</span></a></div>
								<?php 
									} 
								} 
								?>
								<div class="wishlist"><a href="#"><span class="">Wishlist</span></a></div>
								<div class="check"><a href="#"><span class="">Checkout</span></a></div>
								<?php if(isset($_SESSION['user_login']) && ($_SESSION['user_login'] == 'yes')){?>
									<div class="login"><a href="<?php echo base_url();?>home/logout"><span  class="">Logout</span></a></div>
								<?php }else{ ?>
									<div class="login"><a href="<?php echo base_url();?>home/login"><span  class="">Log In</span></a></div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
					<!-- End-Header-links -->
			</div>
		</div>
	</div>
	<!--Start-header-mid-area-->
	<div class="header-mid-wrap">
		<div class="container">
			<div class="header-mid-content">
				<div class="row">
					<!--Start-logo-area-->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="header-logo">
							<a href="index.html"><img src="<?php echo USERASSETS ?>images/logo/1.png" alt="OurStore"></a>
						</div>
					</div>
					<!--End-logo-area-->
					<!--Start-gategory-searchbox-->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div id="search-category-wrap">
							<form class="header-search-box" action="#" method="post">
								<div class="search-cat">
									<select class="category-items" name="category">
										<option>All Categories</option>
										<option>Men</option>
										<option>Women</option>
										<option>Jewellery</option>
										<option>Electronics</option>
										<option>Kid</option>
										<option>Bootees Bags</option>
										<option>Clothing</option>
										<option>Footwear</option>
										<option>T-Shirts</option>
										<option>Polo-Shirts</option>
									</select>
								</div>
								<input type="search" placeholder="Search here..." id="text-search" name="search">
								<button id="btn-search-category" type="submit">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
					</div>
					<!--End-gategory-searchbox-->
					<!--Start-cart-wrap-->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<ul class="header-cart-wrap">
							<li><a class="cart" href="#">My Cart: 2 items</a>
								<div class="mini-cart-content">
									<div class="cart-products-list">
										<div class="sing-cart-pro">
											<div class="cart-image">
												<a href="#"><img src="<?php echo USERASSETS ?>images/product/4.jpg" alt=""></a>
											</div>
											<div class="cart-product-info">
												<a href="#" class="product-name"> Sample product </a>
												<div class="cart-price">
													<span class="quantity"><strong> 1 x</strong></span>
													<span class="p-price">$110.00</span>
												</div>
												<a class="edit-pro" title="edit"><i class="fa fa-pencil-square-o"></i></a>
												<a class="remove-pro" title="remove"><i class="fa fa-times"></i></a>
											</div>
										</div>
										<div class="sing-cart-pro">
											<div class="cart-image">
												<a href="#"><img src="<?php echo USERASSETS ?>images/product/1.jpg" alt=""></a>
											</div>
											<div class="cart-product-info">
												<a href="#" class="product-name">Sample product </a>
												<div class="cart-price">
													<span class="quantity"><strong> 1 x</strong></span>
													<span class="p-price">$150.00</span>
												</div>
												<a class="edit-pro" title="edit"><i class="fa fa-pencil-square-o"></i></a>
												<a class="remove-pro" title="remove"><i class="fa fa-times"></i></a>
											</div>
										</div>
									</div>
									<div class="cart-price-list">
										<p class="price-amount"><span class="cart-subtotal">SUBTotal :</span> <span>$260.00</span> </p>
										<div class="cart-checkout">
											<a href="#">Checkout</a>
										</div>
										<div class="view-cart">
											<a href="#">View cart</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<!--End-cart-wrap-->
				</div>
			</div>
		</div>
	</div>
	<!--End-header-mid-area-->
	<!--Start-Mainmenu-area -->
	<div class="mainmenu-area hidden-sm hidden-xs">
		<div id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
						<div class="log-small"><a class="logo" href="index.html"><img alt="OurStore" src="<?php echo USERASSETS ?>images/logo/s.png"></a></div>
						<div class="mainmenu">
							<nav>
								<ul id="nav">
									<li class=""><a href="<?php echo base_url();?>">Home</a></li>
									<li class="angle-down"><a href="#">Costume Designer</a>
										<div class="megamenu">
											<div class="megamenu-list">
												<span class="mega-single">
													<a href="#" class="mega-title">T-Shirts</a>
													<a href="#">Jackets</a>
													<a href="#">Blazers</a>
													<a href="#">T-Shirts</a>
													<a href="#">Collections</a>
												</span>
												<span class="mega-single">
													<a href="#" class="mega-title">Dresses</a>
													<a href="#">Evening</a>
													<a href="#">Cocktail</a>
													<a href="#">Footwear</a>
													<a href="#">Sunglass</a>
												</span>
												<span class="mega-single">
													<a href="#" class="mega-title">Handbags</a>
													<a href="#">Bootees Bags</a>
													<a href="#">Exclusive</a>
													<a href="#">Furniture</a>
													<a href="#">Jackets</a>
												</span>
												<span class="mega-single">
													<a href="#" class="mega-title">Jewellery</a>
													<a href="#">Earrings</a>
													<a href="#">Braclets</a>
													<a href="#">Nosepins</a>
													<a href="#">Bangels</a>
												</span>
												<span>
													<a href="#" class="mega-banner">
														<img src="<?php echo USERASSETS ?>images/menu/1.jpg" alt="Hi">
													</a>
												</span>
											</div>
										</div>
									</li>
									<li class="angle-down"><a href="#">T-Shirts</a>
										<div class="megamenu">
											<div class="megamenu-list">
												<span class="mega-single">
													<a href="#" class="mega-title">Clothing</a>
													<a href="#">Jackets</a>
													<a href="#">Blazers</a>
													<a href="#">T-Shirts</a>
													<a href="#">Collections</a>
												</span>
												<span class="mega-single">
													<a href="#" class="mega-title">Dresses</a>
													<a href="#">Cocktail</a>
													<a href="#">Evening</a>
													<a href="#">Footwear</a>
													<a href="#">Sunglass</a>
												</span>
												<span class="mega-single">
													<a href="#" class="mega-title">Handbags</a>
													<a href="#">Bootees Bags</a>
													<a href="#">Exclusive</a>
													<a href="#">Furniture</a>
													<a href="#">Jackets</a>
												</span>
												<span class="mega-single">
													<a href="#" class="mega-title">Jewellery</a>
													<a href="#">Earrings</a>
													<a href="#">Braclets</a>
													<a href="#">Nosepins</a>
													<a href="#">Bangels</a>
												</span>
												<span>
													<a href="#" class="mega-banner">
														<img src="<?php echo USERASSETS ?>images/menu/2.jpg" alt="Hi">
													</a>
												</span>
											</div>
										</div>
									</li>
									<li><a href="#">Products</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End-Mainmenu-area-->
	<!--Start-Mobile-Menu-Area -->
	<div class="mobile-menu-area visible-sm visible-xs">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="mobile-menu">
						<nav id="dropdown">
							<ul>
								<li><a href="<?php echo base_url()?>">Home</a></li>
								<li><a href="#">Men</a>
									<ul>
										<li><a href="#">Clothing</a>
											<ul>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Blazers</a></li>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Collections</a></li>
											</ul>
										</li>
										<li><a href="#">Dresses</a>
											<ul>
												<li><a href="#">Evening</a></li>
												<li><a href="#">Cocktail</a></li>
												<li><a href="#">Footwear</a></li>
												<li><a href="#">Sunglass</a></li>
											</ul>
										</li>
										<li><a href="#">Handbags</a>
											<ul>
												<li><a href="#">Bootees Bags</a></li>
												<li><a href="#">Exclusive</a></li>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Furniture</a></li>
											</ul>
										</li>
										<li><a href="#">Jewellery</a>
											<ul>
												<li><a href="#">Earrings</a></li>
												<li><a href="#">Braclets</a></li>
												<li><a href="#">Nosepins</a></li>
												<li><a href="#">SweaBangelsters</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Women</a>
									<ul>
										<li><a href="#">Clothing</a>
											<ul>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Blazers</a></li>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Collections</a></li>
											</ul>
										</li>
										<li><a href="#">Dresses</a>
											<ul>
												<li><a href="#">Evening</a></li>
												<li><a href="#">Cocktail</a></li>
												<li><a href="#">Footwear</a></li>
												<li><a href="#">Sunglass</a></li>
											</ul>
										</li>
										<li><a href="#">Handbags</a>
											<ul>
												<li><a href="#">Bootees Bags</a></li>
												<li><a href="#">Exclusive</a></li>
												<li><a href="#">Jackets</a></li>
												<li><a href="#">Furniture</a></li>
											</ul>
										</li>
										<li><a href="#">Jewellery</a>
											<ul>
												<li><a href="#">Earrings</a></li>
												<li><a href="#">Braclets</a></li>
												<li><a href="#">Nosepins</a></li>
												<li><a href="#">SweaBangelsters</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="#">Pages</a>
									<ul>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Checkout</a></li>
										<li><a href="#">Wishlist</a></li>
										<li><a href="#">Shopping Cart</a></li>
										<li><a href="#">My Account</a></li>
										<li><a href="#">Login</a></li>
										<li><a href="#">Single Product</a></li>
										<li><a href="#">Blog</a></li>
										<li><a href="#">Blog Details</a></li>
										<li><a href="#">Blog Right Sidebar</a></li>
										<li><a href="#">Shop Grid</a></li>
										<li><a href="#">Shop List</a></li>
										<li><a href="#">Shop Right Sidbar</a></li>
										<li><a href="#">404</a></li>
									</ul>
								</li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End-Mobile-Menu-Area -->
</header>
<!--End-Header-area-->