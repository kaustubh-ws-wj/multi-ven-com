<!-- Start-slider-->
<section class="slider-area home-1">
	<div class="preview-1">
		<div id="ensign-nivoslider" class="slides">
			<img src="<?php echo USERASSETS ?>images/slider/1.jpg" alt="" title="#slider-direction-1" />
			<img src="<?php echo USERASSETS ?>images/slider/2.jpg" alt="" title="#slider-direction-2" />
		</div>
		<!-- direction 1 -->
		<div id="slider-direction-1" class="t-cn slider-direction slider-one">
			<div class="slider-progress"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 text-right">
						<div class="slider-content">
							<!-- layer 1 -->
							<div class="layer-1-1">
								<h2 class="title1 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay=".8s">Fashion for <span class="h-color">women</span></h2>
							</div>
							<!-- layer 2 -->
							<div class="layer-1-2">
								<p class="title2">
									<span class="fashion-1 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa fa-modx"></i>
									</span>
								</p>
							</div>
							<!-- layer 3 -->
							<div class="layer-1-3 hidden-xs">
								<p class="title3 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="1.5s" >Clean and elegant design with a modern style.</p>
							</div>
							<!-- layer 4 -->
							<div class="layer-1-4">
								<a class="shop-n wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="2s" href="#">shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- direction 2 -->
		<div id="slider-direction-2" class="slider-direction slider-two">
			<div class="slider-progress"></div>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 text-left">
						<div class="slider-content">
							<!-- layer 1 -->
							<div class="layer-1-1">
								<h2 class="title1 wow bounceInRight" data-wow-duration="0.5s" data-wow-delay=".8s">fashion for <span class="h-color">men</span></h2>
							</div>
							<!-- layer 2 -->
							<div class="layer-1-2">
								<p class="title2">
									<span class="fashion-1 fashion-2 wow bounceInRight" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa fa-modx"></i>
									</span>
								</p>
							</div>
							<!-- layer 3 -->
							<div class="layer-1-3 layer-2-3 hidden-xs">
								<p class="title3  wow bounceInRight" data-wow-duration="0.5s" data-wow-delay="1.5s" >Clean and elegant design with a modern style.</p>
							</div>
							<!-- layer 4 -->
							<div class="layer-2-4">
								<a class="shop-n wow zoomInUp" data-wow-duration="0.5s" data-wow-delay="2s" href="#">shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End-slider-->
<!-- Start-featured-area-->
<div class="featured-product-wrap padding-t padding-dis">
	<div class="container">
		<!-- section-heading start -->
		<div class="section-heading">
			<h3><span class="h-color">FEATURED</span> PRODUCTS</h3>
		</div>
		<!-- section-heading end -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="features-tab">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Men</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">women</a></li>
						<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Clothes</a></li>
						<li role="presentation"><a href="#section" aria-controls="messages" role="tab" data-toggle="tab">Kids</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<!--start-home-section-->
						<div role="tabpanel" class="tab-pane active" id="home">
							<div class="row">
								<div class="featured-carousel indicator">
									<?php foreach($prod_data as $row){?>
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="sale">Sale</div>
										<div class="new">new</div>
										<div class="sale-border"></div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img style="width:263px;height:347.92px;" src="<?php echo $this->Services_model->get_img_file('product',$row['id'],'','','no','src','multi','one');?>" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$100.00</span>
														<span class="old-price"><del>$120.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<?php } ?>
								</div>
							</div>
						</div>
						<!--end-home-section-->
						<!--start-profile-section-->
						<div role="tabpanel" class="tab-pane" id="profile">
							<div class="row">
								<div class="featured-carousel indicator">
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product sold-out">
										<div class="new">Sale</div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/13.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="sold-text">
													<span>Sold <br> Out</span>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$120.00</span>
														<span class="old-price"><del>$140.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="sale">Sale</div>
										<div class="new">new</div>
										<div class="sale-border"></div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/2.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$100.00</span>
														<span class="old-price"><del>$120.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/16.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$300.00</span>
														<span class="old-price"><del>$320.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="new">new</div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/10.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$150.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="new">new</div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/5.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$140.00</span>
														<span class="old-price"><del>$170.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="sale">Sale</div>
										<div class="new">new</div>
										<div class="sale-border"></div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/4.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$100.00</span>
														<span class="old-price"><del>$120.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
								</div>
							</div>
						</div>
						<!--end-profile-section-->
						<!--start-messages-section-->
						<div role="tabpanel" class="tab-pane" id="messages">
							<div class="row">
								<div class="featured-carousel indicator">
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="sale">Sale</div>
										<div class="sale-border"></div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/49.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$100.00</span>
														<span class="old-price"><del>$120.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="new">Sale</div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/50.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$200.00</span>
														<span class="old-price"><del>$220.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="new">new</div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/53.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$100.00</span>
														<span class="old-price"><del>$120.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/52.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$180.00</span>
														<span class="old-price"><del>$210.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/51.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$100.00</span>
														<span class="old-price"><del>$120.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="sale">Sale</div>
										<div class="sale-border"></div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/49.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$240.00</span>
														<span class="old-price"><del>$300.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
								</div>
							</div>
						</div>
						<!--end-messages-section-->
						<!--start-section-section-->
						<div role="tabpanel" class="tab-pane" id="section">
							<div class="row">
								<div class="featured-carousel indicator">
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="sale">Sale</div>
										<div class="new">new</div>
										<div class="sale-border"></div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/44.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$90.00</span>
														<span class="old-price"><del>$100.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="new">new</div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/45.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$200.00</span>
														<span class="old-price"><del>$220.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="new">sale</div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/47.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$100.00</span>
														<span class="old-price"><del>$120.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/48.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$190.00</span>
														<span class="old-price"><del>$210.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/46.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$100.00</span>
														<span class="old-price"><del>$120.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
									<!-- Start-single-product -->
									<div class="col-lg-3">
										<div class="single-product">
										<div class="sale">Sale</div>
										<div class="sale-border"></div>
											<div class="product-img-wrap">
												<a class="product-img" href="#"> <img src="images/product/44.jpg" alt="product-image" /></a>
												<div class="add-to-link">
													<a href="#">
														<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
													</a>
													<a data-toggle="modal" data-target="#productModal" href="#">
														<div><i class="fa fa-eye"></i><span>Quick view</span></div>
													</a>
													<a href="#">
														<div><i class="fa fa-random"></i><span>Add to compare</span></div>
													</a>
												</div>
												<div class="add-to-cart">
													<a href="#" title="add to cart">
														<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
													</a>
												</div>
											</div>
											<div class="product-info text-center">
												<div class="product-content">
													<a href="#"><h3 class="pro-name">Sample Product</h3></a>
													<div class="pro-rating">
														<ul>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star"></i></li>
															<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
														</ul>
													</div>
													<div class="pro-price">
														<span class="price-text">Price:</span>
														<span class="normal-price">$140.00</span>
														<span class="old-price"><del>$170.00</del></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- End-single-product -->
								</div>
							</div>
						</div>
						<!--end-section-section-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End-featured-area-->
<!--Start-latest-trend-area-->
<div class="latest-trend-wrap">
	<div class="bg-trend"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
				<div class="trend-content">
					<h3>The</h3>
					<h1>Latest Trend</h1>
					<p>This season must-haves...</p>
					<a class="shop-no" href="#">shop now</a>
					<a class="view-mor" href="#">view more</a>
				</div>
			</div>
			<div class="trend-product">
				<!-- Start-single-product -->
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
					<div class="single-product trend-pro">
						<div class="product-img-wrap">
							<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/3.jpg" alt="product-image" /></a>
						</div>
						<div class="product-info text-center">
							<div class="product-content">
								<a href="#"><h3 class="pro-name">Sample Product</h3></a>
								<div class="pro-rating">
									<ul>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li class="r-grey"><i class="fa fa-star"></i></li>
										<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
									</ul>
								</div>
								<div class="pro-price">
									<span class="price-text">Price:</span>
									<span class="normal-price">$140.00</span>
									<span class="old-price"><del>$170.00</del></span>
								</div>
							</div>
						</div>
						<div class="upcoming-product">
							<div data-countdown="2019/06/01"></div>
						</div>
					</div>
				</div>
				<!-- End-single-product -->
			</div>
		</div>
	</div>
</div>
<!--End-latest-trend-area-->
<div class="clear"></div>

<!--Start-new-arrival-random-wrap-->
<div class="new-arrival-random-products-wrap padding-t">
	<div class="container">
		<div class="row">
			<!--Start-new-arrival-wrap-->
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<!-- section-heading start -->
				<div class="section-heading new-arriv">
					<h3><span class="h-color">New</span> Arrivals</h3>
				</div>
				<!-- section-heading end -->
				<div class="row">
					<div class="newarrival-carousel indicator">
					
				<?php foreach($prod_data as $value) {  
					// $mains = $this->Services_model->file_view('product',18,'105','140','no','src','multi','one');

						// $thumbs = $this->Services_model->file_view('product',$row['id'],'','','thumb','src','multi','all');
					?>
						<!-- Start-single-product -->
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="single-product">
							<div class="sale">Sale</div>
							<div class="new">new</div>
							<div class="sale-border"></div>
								<div class="product-img-wrap">
									<a class="product-img" href="#"> <img style="width:263px;height:347.92px;" src="<?php echo  $this->Services_model->file_view('product',$value['id'],'','','no','src','multi','one'); ?>" alt="product-image" /></a>
									<div class="add-to-link">
										<a href="#">
											<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
										</a>
										<a data-toggle="modal" data-target="#productModal" href="#">
											<div><i class="fa fa-eye"></i><span>Quick view</span></div>
										</a>
										<a href="#">
											<div><i class="fa fa-random"></i><span>Add to compare</span></div>
										</a>
									</div>
									<div class="add-to-cart">
										<a href="#" title="add to cart">
											<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
										</a>
									</div>
								</div>
								<div class="product-info text-center">
									<div class="product-content">
										<a href="#"><h3 class="pro-name"><?php echo $value['title']; ?></h3></a>
										<div class="pro-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<div class="pro-price">
											<span class="price-text">Price:</span>
											<span class="normal-price">$<?php echo $value['sale_price']; ?></span>
											<span class="old-price"><del>$<?php echo $value['sale_price']; ?></del></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php }?>
						
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="single-product">
							<div class="new">new</div>
								<div class="product-img-wrap">
									<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/5.jpg" alt="product-image" /></a>
									<div class="add-to-link">
										<a href="#">
											<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
										</a>
										<a data-toggle="modal" data-target="#productModal" href="#">
											<div><i class="fa fa-eye"></i><span>Quick view</span></div>
										</a>
										<a href="#">
											<div><i class="fa fa-random"></i><span>Add to compare</span></div>
										</a>
									</div>
									<div class="add-to-cart">
										<a href="#" title="add to cart">
											<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
										</a>
									</div>
								</div>
								<div class="product-info text-center">
									<div class="product-content">
										<a href="#"><h3 class="pro-name">Sample Product</h3></a>
										<div class="pro-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<div class="pro-price">
											<span class="price-text">Price:</span>
											<span class="normal-price">$130.00</span>
											<span class="old-price"><del>$160.00</del></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
					</div>
				</div>
			</div>
			<!--End-new-arrival-wrap-->
			<!--Start-random-wrap-->
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 random-section">
				<!-- section-heading start -->
				<div class="section-heading new-arriv">
					<h3><span class="h-color">Random</span> Products</h3>
				</div>
				<!-- section-heading end -->
				<div class="row">
					<div class="newarrival-carousel indicator">
						<!-- Start-single-product -->
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="single-product">
							<div class="sale">Sale</div>
							<div class="new">new</div>
							<div class="sale-border"></div>
								<div class="product-img-wrap">
									<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/4.jpg" alt="product-image" /></a>
									<div class="add-to-link">
										<a href="#">
											<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
										</a>
										<a data-toggle="modal" data-target="#productModal" href="#">
											<div><i class="fa fa-eye"></i><span>Quick view</span></div>
										</a>
										<a href="#">
											<div><i class="fa fa-random"></i><span>Add to compare</span></div>
										</a>
									</div>
									<div class="add-to-cart">
										<a href="#" title="add to cart">
											<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
										</a>
									</div>
								</div>
								<div class="product-info text-center">
									<div class="product-content">
										<a href="#"><h3 class="pro-name">Sample Product</h3></a>
										<div class="pro-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<div class="pro-price">
											<span class="price-text">Price:</span>
											<span class="normal-price">$140.00</span>
											<span class="old-price"><del>$170.00</del></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="single-product">
							<div class="new">new</div>
								<div class="product-img-wrap">
									<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/1.jpg" alt="product-image" /></a>
									<div class="add-to-link">
										<a href="#">
											<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
										</a>
										<a data-toggle="modal" data-target="#productModal" href="#">
											<div><i class="fa fa-eye"></i><span>Quick view</span></div>
										</a>
										<a href="#">
											<div><i class="fa fa-random"></i><span>Add to compare</span></div>
										</a>
									</div>
									<div class="add-to-cart">
										<a href="#" title="add to cart">
											<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
										</a>
									</div>
								</div>
								<div class="product-info text-center">
									<div class="product-content">
										<a href="#"><h3 class="pro-name">Sample Product</h3></a>
										<div class="pro-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<div class="pro-price">
											<span class="price-text">Price:</span>
											<span class="normal-price">$140.00</span>
											<span class="old-price"><del>$170.00</del></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="single-product">
							<div class="sale">Sale</div>
							<div class="new">new</div>
							<div class="sale-border"></div>
								<div class="product-img-wrap">
									<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/6.jpg" alt="product-image" /></a>
									<div class="add-to-link">
										<a href="#">
											<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
										</a>
										<a data-toggle="modal" data-target="#productModal" href="#">
											<div><i class="fa fa-eye"></i><span>Quick view</span></div>
										</a>
										<a href="#">
											<div><i class="fa fa-random"></i><span>Add to compare</span></div>
										</a>
									</div>
									<div class="add-to-cart">
										<a href="#" title="add to cart">
											<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
										</a>
									</div>
								</div>
								<div class="product-info text-center">
									<div class="product-content">
										<a href="#"><h3 class="pro-name">Sample Product</h3></a>
										<div class="pro-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<div class="pro-price">
											<span class="price-text">Price:</span>
											<span class="normal-price">$240.00</span>
											<span class="old-price"><del>$300.00</del></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="single-product">
							<div class="sale">Sale</div>
							<div class="sale-border"></div>
								<div class="product-img-wrap">
									<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/10.jpg" alt="product-image" /></a>
									<div class="add-to-link">
										<a href="#">
											<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
										</a>
										<a data-toggle="modal" data-target="#productModal" href="#">
											<div><i class="fa fa-eye"></i><span>Quick view</span></div>
										</a>
										<a href="#">
											<div><i class="fa fa-random"></i><span>Add to compare</span></div>
										</a>
									</div>
									<div class="add-to-cart">
										<a href="#" title="add to cart">
											<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
										</a>
									</div>
								</div>
								<div class="product-info text-center">
									<div class="product-content">
										<a href="#"><h3 class="pro-name">Sample Product</h3></a>
										<div class="pro-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<div class="pro-price">
											<span class="price-text">Price:</span>
											<span class="normal-price">$200.00</span>
											<span class="old-price"><del>$220.00</del></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="single-product">
							<div class="new">new</div>
								<div class="product-img-wrap">
									<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/8.jpg" alt="product-image" /></a>
									<div class="add-to-link">
										<a href="#">
											<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
										</a>
										<a data-toggle="modal" data-target="#productModal" href="#">
											<div><i class="fa fa-eye"></i><span>Quick view</span></div>
										</a>
										<a href="#">
											<div><i class="fa fa-random"></i><span>Add to compare</span></div>
										</a>
									</div>
									<div class="add-to-cart">
										<a href="#" title="add to cart">
											<div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
										</a>
									</div>
								</div>
								<div class="product-info text-center">
									<div class="product-content">
										<a href="#"><h3 class="pro-name">Sample Product</h3></a>
										<div class="pro-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
											</ul>
										</div>
										<div class="pro-price">
											<span class="price-text">Price:</span>
											<span class="normal-price">$130.00</span>
											<span class="old-price"><del>$160.00</del></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
					</div>
				</div>
			</div>
			<!--End-random-wrap-->
		</div>
	</div>
</div>
<!--end-new-arrival-random-wrap-->
<div class="clear"></div>
<!--Satar-business-policy-wrap-->
<div class="business-policy-wrap padding-t">
	<div class="container">
		<div class="row">
			<!--Satar-single-p-wrap-->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="single-p-wrap banner-r-b text-center">
					<span><i class="fa fa-plane"></i></span>
					<h4>FREE SHIPPING WORLDWIDE.</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p>
				</div>
			</div>
			<!--end-single-p-wrap-->
			<!--Satar-single-p-wrap-->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="single-p-wrap banner-r-b text-center">
					<span><i class="fa fa-life-ring"></i></span>
					<h4>24/7 CUSTOMER SERVICE.</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p>
				</div>
			</div>
			<!--end-single-p-wrap-->
			<!--Satar-single-p-wrap-->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="single-p-wrap banner-r-b text-center">
					<span><i class="fa fa-money"></i></span>
					<h4>100% MONEY BACK</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p>
				</div>
			</div>
			<!--end-single-p-wrap-->
			<!--Satar-single-p-wrap-->
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="single-p-wrap text-center">
					<span><i class="fa fa-clock-o"></i></span>
					<h4>OPEN: 8:00AM - CLOSE: 20:00PM.</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, veniam.</p>
				</div>
			</div>
			<!--end-single-p-wrap-->
		</div>
	</div>
</div>
<!--End-business-policy-wrap-->
<!--Start-latest-products-wrap-->
<div class="latest-products-wrap padding-t">
	<div class="container">
		<div class="latest-content text-center">
			<div class="section-heading">
				<h3><span class="h-color">latest</span> Products</h3>
			</div>
		</div>
		<div class="row">
			<div class="featured-carousel indicator">
				<!-- Start-single-product -->
				<?php foreach($prod_data as $value) { ?>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="single-product">
						<div class="sale">Sale</div>
						<div class="sale-border"></div>
							<div class="product-img-wrap">
								<a class="product-img" href="#"> <img style="width:263px;height:347.92px;" src="<?php echo $this->Services_model->file_view('product',$value['id'],'','','no','src','multi','one');?>" alt="product-image" /></a>
								<div class="add-to-link">
									<a href="#">
										<div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
									</a>
									<a data-toggle="modal" data-target="#productModal" href="#">
										<div><i class="fa fa-eye"></i><span>Quick view</span></div>
									</a>
									<a href="#">
										<div><i class="fa fa-random"></i><span>Add to compare</span></div>
									</a>
								</div>
								<!-- <div class="sold-text">
									<span>Sold <br> Out</span>
								</div> -->
							</div>
							<div class="product-info text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name"><?php echo $value['title']; ?></h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price"><?php echo $value['sale_price']; ?></span>
										<span class="old-price"><del><?php echo $value['sale_price']; ?></del></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
				
			</div>
		</div>
	</div>
</div>
<!--End-latest-products-wrap-->
<!-- Start-banner-area-->
<div class="banner-area padding-t banner-dis">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="single-banner fullwide-ban">
					<a href="#"><img alt="Hi Guys" src="<?php echo USERASSETS ?>images/banner/23.jpg" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End-banner-area-->
<!--Start-brand-area-->
<div class="brands-area brand-dis1">
	<div class="container">
		<!--barand-heading-->
		<div class="brand-heading text-center">
			<h2>Our brands</h2>
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
<!--Start-variety-products-wrap-->
<div class="variety-products-wrap padding-t">
	<div class="container">
		<div class="row">
			<!--start-best-seller-product-->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="best-heading">
					<div class="section-heading best-h">
						<h3><span class="h-color">Best</span> Seller</h3>
					</div>
				</div>
				<div class="best-carousel">
					<!--start-double-best-product-->
					<div class="best-double-product">
						<!-- Start-single-product -->
						<div class="single-product margin-b">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/3.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="single-product">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/1.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
					</div>
					<!--end-double-best-product-->
					<!--start-double-best-product-->
					<div class="best-double-product">
						<!-- Start-single-product -->
						<div class="single-product margin-b">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/2.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="single-product">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/6.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
					</div>
					<!--end-double-best-product-->
				</div>
			</div>
			<!--end-best-seller-product-->
			<!--start-Top-rated-product-->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 top-rated">
				<div class="best-heading">
					<div class="section-heading best-h">
						<h3><span class="h-color">Top</span> Rated</h3>
					</div>
				</div>
				<div class="best-carousel">
					<!--start-double-best-product-->
					<div class="best-double-product">
						<!-- Start-single-product -->
						<div class="single-product margin-b">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/4.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="single-product">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/5.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
					</div>
					<!--end-double-best-product-->
					<!--start-double-best-product-->
					<div class="best-double-product">
						<!-- Start-single-product -->
						<div class="single-product margin-b">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/6.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="single-product">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/10.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
					</div>
					<!--end-double-best-product-->
				</div>
			</div>
			<!--end-Top-rated-product-->
			<!--start-best-offer-product-->
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 best-off">
				<div class="best-heading">
					<div class="section-heading best-h">
						<h3><span class="h-color">Best</span> Offer</h3>
					</div>
				</div>
				<div class="best-carousel">
					<!--start-double-best-product-->
					<div class="best-double-product">
						<!-- Start-single-product -->
						<div class="single-product margin-b">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/10.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="single-product">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/9.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
					</div>
					<!--end-double-best-product-->
					<!--start-double-best-product-->
					<div class="best-double-product">
						<!-- Start-single-product -->
						<div class="single-product margin-b">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/8.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
						<!-- Start-single-product -->
						<div class="single-product">
							<div class="product-img-wrap best-s-w">
								<a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/7.jpg" alt="product-image" /></a>
							</div>
							<div class="product-info best-s text-center">
								<div class="product-content">
									<a href="#"><h3 class="pro-name">Sample Product</h3></a>
									<div class="pro-rating">
										<ul>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star"></i></li>
											<li class="r-grey"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="pro-price">
										<span class="price-text">Price:</span>
										<span class="normal-price">$140.00</span>
										<span class="old-price"><del>$170.00</del></span>
									</div>
									<div class="add-to-cartbest">
										<a href="#" title="add to cart">
											<div><span>Add to cart</span></div>
										</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End-single-product -->
					</div>
					<!--end-double-best-product-->
				</div>
			</div>
			<!--end-best-offer-product-->
		</div>
	</div>
</div>
<!--End-variety-products-wrap-->