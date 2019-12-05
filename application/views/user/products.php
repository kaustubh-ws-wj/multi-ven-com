<!--start-single-heading-banner-->
<div class="single-banner-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="single-ban-top-content">
                    <p>Shop grid</p>
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
            <!--start-shop-head -->
            <div class="col-lg-12">
                <div class="shop-head-menu">
                    <ul>
                        <li><i class="fa fa-home"></i><a class="shop-home" href="<?php echo base_url();?>"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                        <li class="shop-pro">Shop grid</li>
                    </ul>
                </div>
            </div>
            <!--end-shop-head-->
        </div>
    </div>
</div>
<!--end-single-heading-->
<!--start-shop-product-area-->
<div class="shop-product-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <!-- Left-Sidebar-start-->
                <div class="left-sidebar-title">
                    <h2>Shopping Options</h2>
                </div>
                <!-- Shop-Layout-start -->
                <div class="left-sidebar">
                    <div class="shop-layout">
                        <div class="layout-title">
                            <h2>Category</h2>
                        </div>
                        <div class="layout-list">
                            <ul>
                                <?php foreach($category as $row) {?>
                                <li><a href="#"><?php echo $row['category_name']; ?></a><span>(<?php echo $row['product_count']?>)</span></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <!-- Shop-Layout-end -->
                    <!-- Price-Filter-start -->
                    <div class="price-filter-area shop-layout">
                        <div class="price-filter">
                            <div class="layout-title">
                                <h2>Price</h2>
                            </div>
                            <p>
                                <label class="range-text">Range:</label>
                                <input type="text" style="border:0; color:#f6931f; font-weight:bold;" readonly="" id="amount">
                                <input type="hidden" id="hidden_minimum_price" value="">
                                <input type="hidden" id="hidden_maximum_price" value="">

                            </p>
                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span></div>
                            <button class="btn btn-default">show</button>
                        </div>
                    </div>
                    <!-- Price-Filter-end -->
                    <!-- Shop-Layout-start -->
                    <div class="shop-layout">
                        <div class="layout-title">
                            <h2>Manufacturer</h2>
                        </div>
                        <div class="layout-list">
                            <ul>
                                <li><a href="#">Adidas</a><span>(2)</span></li>
                                <li><a href="#">Chanel</a><span>(2)</span></li>
                                <li><a href="#">DKNY</a><span>(1)</span></li>
                                <li><a href="#">Dolce</a><span>(2)</span></li>
                                <li><a href="#">Gabbana</a><span>(3)</span></li>
                                <li><a href="#">Nike</a><span>(4)</span></li>
                                <li><a href="#">Vogue</a><span>(2)</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Shop-Layout-end -->
                    <!-- Shop-Layout-start -->
                    <div class="shop-layout">
                        <div class="layout-title">
                            <h2>Color</h2>
                        </div>
                        <div class="layout-list">
                            <ul>
                                <li><a href="#">Black</a><span>(1)</span></li>
                                <li><a href="#">Blue</a><span>(2)</span></li>
                                <li><a href="#">Brown</a><span>(3)</span></li>
                                <li><a href="#">Pink</a><span>(3)</span></li>
                                <li><a href="#">Red</a><span>(2)</span></li>
                                <li><a href="#">White</a><span>(2)</span></li>
                                <li><a href="#">Yellow</a><span>(3)</span></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Shop-Layout-end -->
                </div>
                <!-- End-Left-Sidebar -->
                <!-- Shop-compare-start -->
                <div class="shop-banner-area">
                    <div class="left-sidebar-title">
                        <h2 class="compare-title contact">Compare Products</h2>
                    </div>
                    <div class="layout-list compare">
                        <ul>
                            <li><a href="#">occaecati cupiditate</a><span class="compare-icon"><i class="fa fa-trash"></i></span></li>
                            <li><a href="#">consequences</a><span class="compare-icon"><i class="fa fa-trash"></i></span></li>
                            <li><a href="#">pleasure rationally</a><span class="compare-icon"><i class="fa fa-trash"></i></span></li>
                        </ul>
                        <div class="compare-action">
                            <div class="clear-button">
                                <a href="#">clear all</a>
                            </div>
                            <div class="product-cart compare">
                                <button class="button">compare</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop-compare-end -->
                
            </div>
            <!-- SEARCH SCRIPT START-->



            <!-- SEARCH SCRIPT END -->

            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <!-- Shop-Product-View-start -->
                <div class="shop-product-view">
                    <!-- Shop Product Tab Area -->
                    <div class="product-tab-area">
                        <!-- Tab Bar -->
                        <div class="tab-bar">
                            <div class="tab-bar-inner">
                                <ul role="tablist" class="nav nav-tabs">
                                    <li class="active"><a title="Grid" data-toggle="tab" href="#shop-product"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                    <li><a  title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                </ul>
                            </div>
                            <div class="toolbar">
                                <div class="sorter">
                                    <div class="sort-by">
                                        <label class="sort-none">Sort By</label>
                                        <select>
                                            <option value="position">Position</option>
                                            <option value="name">Name</option>
                                            <option value="price">Price</option>
                                        </select>
                                        <a class="up-arrow" href="#"><i class="fa fa-long-arrow-up"></i></a>
                                    </div>
                                </div>
                                <div class="pager-list">
                                    <div class="limiter">
                                        <label>Show</label>
                                        <select>
                                            <option value="9">9</option>
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                            <option value="36">36</option>
                                        </select>
                                        per page
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End-Tab-Bar -->
                        <!-- Tab-Content -->
                        <div class="tab-content">
                            <!-- Shop Product-->
                            <div id="shop-product" class="tab-pane active">
                                <div class="row filter_data">
                                    <!-- Start-single-product -->
                                    
                                    <!-- End-single-product -->
                                </div>
                            </div>
                            <!-- End-Shop-Product-->
                            <!-- Shop List -->
                            <div id="shop-list" class="tab-pane">
                                <!-- start-Single-Shop-list-->
                                <div class="single-shop">
                                    <div class="row">
                                        <!-- single-product-start -->
                                        <div class="single-product">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/14.jpg" alt="product-image" /></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <div class="product-info text-left">
                                                    <div class="product-content shop">
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
                                                            <span class="normal-price">150.00</span>
                                                            <span class="old-price"><del>$200.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shop-article text-left">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                </div>
                                                <div class="shop-button-area">
                                                    <div class="add-to-cartbest shop">
                                                        <a href="#" title="add to cart">
                                                            <div><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="add-to-link shop">
                                                    <a href="#">
                                                        <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                    </a>
                                                    <a href="#">
                                                        <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                </div>
                                <!-- end-Single-Shop-list-->
                                <!-- start-Single-Shop-list-->
                                <div class="single-shop">
                                    <div class="row">
                                        <!-- single-product-start -->
                                        <div class="single-product">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/1.jpg" alt="product-image" /></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <div class="product-info text-left">
                                                    <div class="product-content shop">
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
                                                            <span class="normal-price">200.00</span>
                                                            <span class="old-price"><del>$2050.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shop-article text-left">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                </div>
                                                <div class="shop-button-area">
                                                    <div class="add-to-cartbest shop">
                                                        <a href="#" title="add to cart">
                                                            <div><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="add-to-link shop">
                                                    <a href="#">
                                                        <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                    </a>
                                                    <a href="#">
                                                        <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                </div>
                                <!-- end-Single-Shop-list-->
                                <!-- start-Single-Shop-list-->
                                <div class="single-shop">
                                    <div class="row">
                                        <!-- single-product-start -->
                                        <div class="single-product">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/8.jpg" alt="product-image" /></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <div class="product-info text-left">
                                                    <div class="product-content shop">
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
                                                            <span class="normal-price">220.00</span>
                                                            <span class="old-price"><del>$240.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shop-article text-left">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                </div>
                                                <div class="shop-button-area">
                                                    <div class="add-to-cartbest shop">
                                                        <a href="#" title="add to cart">
                                                            <div><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="add-to-link shop">
                                                    <a href="#">
                                                        <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                    </a>
                                                    <a href="#">
                                                        <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                </div>
                                <!-- end-Single-Shop-list-->
                                <!-- start-Single-Shop-list-->
                                <div class="single-shop">
                                    <div class="row">
                                        <!-- single-product-start -->
                                        <div class="single-product">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/7.jpg" alt="product-image" /></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <div class="product-info text-left">
                                                    <div class="product-content shop">
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
                                                            <span class="normal-price">150.00</span>
                                                            <span class="old-price"><del>$200.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shop-article text-left">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                </div>
                                                <div class="shop-button-area">
                                                    <div class="add-to-cartbest shop">
                                                        <a href="#" title="add to cart">
                                                            <div><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="add-to-link shop">
                                                    <a href="#">
                                                        <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                    </a>
                                                    <a href="#">
                                                        <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                </div>
                                <!-- end-Single-Shop-list-->
                                <!-- start-Single-Shop-list-->
                                <div class="single-shop">
                                    <div class="row">
                                        <!-- single-product-start -->
                                        <div class="single-product">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="product-img-wrap">
                                                    <a class="product-img" href="#"> <img src="<?php echo USERASSETS ?>images/product/4.jpg" alt="product-image" /></a>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <div class="product-info text-left">
                                                    <div class="product-content shop">
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
                                                            <span class="normal-price">180.00</span>
                                                            <span class="old-price"><del>$200.00</del></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shop-article text-left">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis laboriosam hic omnis, blanditiis nihil aliquam, dolores maxime eum et quidem ducimus nostrum adipisci culpa, delectus numquam repellendus minima deserunt iste similique nesciunt. Accusantium ipsam sed deleniti culpa necessitatibus optio sit fuga quis cumque itaque odit nihil non, officia, et sapiente.</p>
                                                </div>
                                                <div class="shop-button-area">
                                                    <div class="add-to-cartbest shop">
                                                        <a href="#" title="add to cart">
                                                            <div><span>Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="add-to-link shop">
                                                    <a href="#">
                                                        <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                    </a>
                                                    <a href="#">
                                                        <div><i class="fa fa-random"></i><span>Add to compare</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-end -->
                                    </div>
                                </div>
                                <!-- end-Single-Shop-list-->
                            </div>
                            <!-- End Shop List -->
                        </div>
                        <!-- End Tab Content -->
                        <!-- Tab Bar -->
                        <div class="tab-bar tab-bar-bottom">
                            <div class="tab-bar-inner">
                                <ul role="tablist" class="nav nav-tabs">
                                    <li class="active"><a title="Grid" data-toggle="tab" href="#shop"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                    <li><a title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                </ul>
                            </div>
                            <div class="toolbar">
                                <div class="sorter">
                                    <div class="sort-by">
                                        <label class="sort-none">Sort By</label>
                                        <select>
                                            <option value="position">Position</option>
                                            <option value="name">Name</option>
                                            <option value="price">Price</option>
                                        </select>
                                        <a class="up-arrow" href="#"><i class="fa fa-long-arrow-up"></i></a>
                                    </div>
                                </div>
                                <script>


                                    $(document).ready(function(){

                                        filter_data(1);

                                        function filter_data(page)
                                        {
                                            $('.filter_data').html('<div id="loading" style="" ></div>');
                                            var action = 'fetch_data';
                                            var minimum_price = $('#hidden_minimum_price').val();
                                            var maximum_price = $('#hidden_maximum_price').val();
                                            
                                            $.ajax({
                                                url:"<?php echo base_url(); ?>home/products/fetch_data/"+page,
                                                method:"POST",
                                                dataType:"JSON",
                                                data:{'action':action, 'minimum_price':minimum_price, 'maximum_price':maximum_price},
                                               
                                                success:function(data)
                                                {
                                                    $('.filter_data').html(data.product_list);
                                                    $('#pagination_link').html(data.pagination_link);
                                                }
                                            })
                                        }

                                        function get_filter(class_name)
                                        {
                                            var filter = [];
                                            $('.'+class_name+':checked').each(function(){
                                                filter.push($(this).val());
                                            });
                                            return filter;
                                        }

                                        $(document).on('click', '.pagination li a', function(event){
                                            event.preventDefault();
                                            var page = $(this).data('ci-pagination-page');
                                            if(typeof page === 'undefined'){
                                                page = $(this).text();
                                            }
                                            filter_data(page);
                                        });

                                        $('.common_selector').click(function(){
                                            filter_data(1);
                                        });

                                        $( "#slider-range" ).slider({
                                        range: true,
                                        min: 80,
                                        max: 750,
                                        values: [ 80, 1000 ],
                                        slide: function( event, ui ) {
                                            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                                            $('#hidden_minimum_price').val(ui.values[ 0 ]);
                                            $('#hidden_maximum_price').val(ui.values[ 1 ]);
                                            
                                        },
                                        stop: function( event, ui ){
                                            $('#hidden_minimum_price').val(ui.values[ 0 ]);
                                            $('#hidden_maximum_price').val(ui.values[ 1 ]);
                                            filter_data(1);
                                        }
                                        });
                                        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                                        " - $" + $( "#slider-range" ).slider( "values", 1 ) 
                                        ); 
                                        $('#hidden_minimum_price').val($( "#slider-range" ).slider( "values", 0 ));
                                        $('#hidden_maximum_price').val($( "#slider-range" ).slider( "values", 1 ));

                                    });


                                </script>
                                <div class="pages" id="pagination_link">
                                    <strong>Page:</strong>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Bar -->
                    </div>
                    <!-- End Shop Product Tab Area -->
                </div>
                <!-- End Shop Product View -->
            </div>
        </div>
    </div>
</div>
<!--shop-product-area-end-->


