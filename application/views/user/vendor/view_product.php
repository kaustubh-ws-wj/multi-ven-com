 <!--start-single-heading-banner-->
 <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p>single product</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!--start-shop-head -->
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index.html"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Single Product</li>
                                </ul>
                            </div>
                            <!--end-shop-head-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <?php foreach($product_data as $row){ ?>
            <!--start-signle-page-->
            <div class="single-page-area padding-t">
                <!-- Single Product details Area -->
                <div class="single-product-details-area">
                    <!-- Single Product View Area -->
                    <div class="single-product-view-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                    <!-- Single Product View -->
                                    <div class="single-procuct-view">
                                        <!-- Simple Lence Gallery Container -->
                                        <div class="simpleLens-gallery-container" id="p-view">
                                            <div class="simpleLens-container tab-content">
                                                <div class="tab-pane active" id="p-view-1">
                                                    <div class="simpleLens-big-image-container">
                                                        <a class="simpleLens-lens-image" data-lens-image="images/single-p/b1.jpg">
                                                            <img src="<?php echo $this->Services_model->file_view('product',$row['id']); ?>" class="simpleLens-big-image" alt="product">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="p-view-2">
                                                    <div class="simpleLens-big-image-container">
                                                        <a class="simpleLens-lens-image" data-lens-image="<?php echo $this->Services_model->file_view('product',$row['id'],'105','140','thumb','src','multi','one'); ?>">
                                                            <img src="<?php echo $this->Services_model->file_view('product',$row['id'],'105','140','thumb','src','multi','one'); ?>" class="simpleLens-big-image" alt="product">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="p-view-3">
                                                    <div class="simpleLens-big-image-container">
                                                        <a class="simpleLens-lens-image" data-lens-image="images/single-p/b3.jpg">
                                                            <img src="images/single-p/m3.jpg" class="simpleLens-big-image" alt="product">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="p-view-4">
                                                    <div class="simpleLens-big-image-container">
                                                        <a class="simpleLens-lens-image" data-lens-image="images/single-p/b4.jpg" >
                                                            <img src="images/single-p/m4.jpg" class="simpleLens-big-image" alt="product">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="p-view-5">
                                                    <div class="simpleLens-big-image-container">
                                                        <a class="simpleLens-lens-image" data-lens-image="images/single-p/b5.jpg" >
                                                            <img src="images/single-p/m5.jpg" class="simpleLens-big-image" alt="product">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="p-view-6">
                                                    <div class="simpleLens-big-image-container">
                                                        <a class="simpleLens-lens-image" data-lens-image="images/single-p/b6.jpg">
                                                            <img src="images/single-p/m6.jpg" class="simpleLens-big-image" alt="product">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Simple Lence Thumbnail -->
                                            <div class="simpleLens-thumbnails-container text-center">
                                                <div id="single-product" class="owl-carousel custom-carousel">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class="active"><a href="#p-view-1" role="tab" data-toggle="tab"><img src="images/single-p/s1.jpg" alt="productd"></a></li>
                                                        <li class="last-li"><a href="#p-view-2" role="tab" data-toggle="tab"><img src="images/single-p/s2.jpg" alt="productd"></a></li>
                                                        <li class="hidden-md hidden-xs hidden-sm"><a href="#p-view-3" role="tab" data-toggle="tab"><img src="images/single-p/s3.jpg" alt="productd"></a></li>
                                                    </ul>
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li class=""><a href="#p-view-4" role="tab" data-toggle="tab"><img src="images/single-p/s4.jpg" alt="productd"></a></li>
                                                        <li class="last-li"><a href="#p-view-5" role="tab" data-toggle="tab"><img src="images/single-p/s5.jpg" alt="productd"></a></li>
                                                        <li class="hidden-md hidden-xs hidden-sm"><a href="#p-view-6" role="tab" data-toggle="tab"><img src="images/single-p/s6.jpg" alt="productd"></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Simple Lence Thumbnail -->
                                        </div>
                                        <!-- End Simple Lence Gallery Container -->
                                    </div>
                                    <!-- End Single Product View -->
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 single-product-details">
                                    <div class="single-pro">
                                        <div class="product-name">
                                            <h3><?php echo $row['title'];?></h3>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <div class="product-content">
                                            <div class="pro-rating single-p">
                                                <!--ul class="single-pro-rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star"></i></li>
                                                    <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                </ul-->
                                                <!--div class="rating-links">
                                                    <a href="#">1 Review(s)</a>
                                                    <span class="separator">|</span>
                                                    <a href="#" class="add-to-review">Add Your Review</a>
                                                </div>
                                            </div--><br>
                                            <div class="pro-price single-p">
                                                <span class="price-text">Sale Price:</span>
                                                <span class="normal-price">$<?php echo $row['sale_price'];?></span>
                                            </div>
                                        </div>
                                        <p>Quantity: <span class="signle-stock"></span><?php echo $row['current_stock'];?></p>
                                        <p><h4>Category:</h4> <span class="signle-stock"></span><?php echo $row['category'];?></p>
                                        <p><h4>Sub-Category:</h4> <span class="signle-stock"></span><?php echo $row['sub_category'];?></p>
                                        &nbsp;
                                        <div class="product-reveiw">
                                            <h3>Description:</h3>
                                            <p><?php echo $row['description'];?></p>
                                        </div>
                                        <div class="clear"></div>
                                        <!--start-size-area-->
                                        <!--div class="skill-checklist">
                                            <label for="skillc"><span class="size-cho">Size:</span>
                                            </label>
                                            <br>
                                            <select id="skillc">
                                                <option value="">S</option>
                                                <option value="">M</option>
                                                <option value="">L</option>
                                                <option value="">XL</option>
                                                <option value="">XXL</option>
                                            </select>
                                        </div-->
                                        <!--end-size-area-->
                                        <!--start-color-choice-->
                                        <!--div class="color-instock">
                                            <div class="skill-colors">
                                                <span class="color-cho">Color</span>
                                                <ul class="skill-ulli">
                                                    <li class="light-black click-bdr">
                                                        <a href="#"></a>
                                                    </li>
                                                    <li class="skill-orange active-skill">
                                                        <a href="#"></a>
                                                    </li>
                                                    <li class="skill-blue">
                                                        <a href="#"></a>
                                                    </li>
                                                    <li class="skill-yellow">
                                                        <a href="#"></a>
                                                    </li>
                                                    <li class="skill-green">
                                                        <a href="#"></a>
                                                    </li>
                                                    <li class="skill-grey">
                                                        <a href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div-->
                                        <!--end-color-choice-->
                                        <!--div class="">
                                            <div class="quick-add-to-cart">
                                                <form method="post" class="cart">
                                                    <div class="qty-button">
                                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">

                                                        <div class="box-icon button-plus">
                                                            <input type="button" class="qty-increase " onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
                                                        </div>
                                                        <div class="box-icon button-minus">
                                                            <input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cartbest single-add">
                                                        <a href="#" title="add to cart">
                                                            <div><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div-->
                                        <!-- social-markting end -->
                                        <div class="clear"></div>
                                        <div class="single-pro-cart">
                                            <!--div class="add-to-link single-p">
                                                <a href="#" title="Wishlist">
                                                    <div><i class="fa fa-heart"></i></div>
                                                </a>
                                                <a href="#" title="Email">
                                                    <div><i class="fa fa-envelope"></i></div>
                                                </a>
                                                <a href="#" title="Compare">
                                                    <div><i class="fa fa-random"></i></div>
                                                </a>
                                            </div-->
                                        </div>
                                        <div class="clear"></div>
                                        <div class="social-icon-img">
                                            <div class="sharethis-inline-share-buttons"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product View Area -->
                </div>
                        <!-- End Single details Area -->
            </div>
            <!--End-signle-page-->
            <?php }?>
            <!--Start-brand-area-->
<div class="brands-area brands-account">
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