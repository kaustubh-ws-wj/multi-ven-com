
<!--start-single-heading-banner-->
<div class="single-banner-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="single-ban-top-content">
                    <p>My Account</p>
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
                        <li><i class="fa fa-home"></i><a class="shop-home" href="index.html"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                        <li class="shop-pro">My Account</li>
                    </ul>
                </div>
            </div>
            <!--end-shop-head-->
        </div>
    </div>
</div>
<!--end-single-heading-->
<!-- cart-main-area start-->
<div class="cart-main-area">
    <div class="container">
        <div class="ps-vendor-dashboard">
            <div class="ps-section__content">
                <ul class="ps-section__links">
                    <li ><a href="<?php echo base_url();?>vendor/dashboard">Dashboard</a></li>
                    <li class="active"><a href="<?php echo base_url();?>vendor/products">Products</a></li>
                    <li><a href="<?php echo base_url();?>vendor/orders">Order</a></li>
                    <li><a href="<?php echo base_url();?>vendor/settings">Setting</a></li>
                    <li><a href="<?php echo base_url();?>home">View Store</a></li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="tab-content">
                
                <div id="products" class="tab-pane fade in active">
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="coupon pull-right">                    
                            <a class="my-btn" href="<?php echo base_url();?>vendor/products/add_product" id="vendor-add-product">Add Product</a>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                        
                        <div class="table-content table-responsive" id="vendor-product-list">
                            <table id="events-table" class="table table-striped"  data-url="<?php echo base_url(); ?>vendor/product/list_data" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"  data-show-refresh="true" data-search="true"  data-show-export="true">
                                <thead>
                                    <tr>
                                        <th data-field="image" data-align="center">Image</th>
                                        <th data-field="title" data-align="center" data-sortable="true">Title</th>
                                        <th data-field="sale_price" data-align="center" data-sortable="true">Sale Price</th>
                                        <th data-field="current_stock"data-align="center" data-sortable="true">Current Stock</th>
                                        <th data-field="options" data-align="center" data-sortable="false">Options</th>
                                    </tr>
                                </thead>
                            </table>
                            
                            
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>                                       
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="<?php echo USERASSETS ?>images/cart/3.jpg" alt="" /></a></td>
                                        <td class="product-name"><a href="#">Sample Product</a></td>
                                        <td class="product-price"><span class="amount">£125.00</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>                                        
                                        <td class="product-remove"><a href="#"><i class="fa fa-book"></i></a><a href="#"><i class="fa fa-edit"></i></a><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="<?php echo USERASSETS ?>images/cart/4.jpg" alt="" /></a></td>
                                        <td class="product-name"><a href="#">Sample Product</a></td>
                                        <td class="product-price"><span class="amount">£90.00</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>                                       
                                        <td class="product-remove"><a href="#"><i class="fa fa-book"></i></a><a href="#"><i class="fa fa-edit"></i></a><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                    
                </div>
               
            </div>   
        </div>
    </div>
</div>
<!-- cart-main-area end -->
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

<script type="text/javascript">
    $(document).ready(function(){
        $('#events-table').bootstrapTable({
            /*
            onAll: function (name, args) {
                console.log('Event: onAll, data: ', args);
            }
            onClickRow: function (row) {
                $result.text('Event: onClickRow, data: ' + JSON.stringify(row));
            },
            onDblClickRow: function (row) {
                $result.text('Event: onDblClickRow, data: ' + JSON.stringify(row));
            },
            onSort: function (name, order) {
                $result.text('Event: onSort, data: ' + name + ', ' + order);
            },
            onCheck: function (row) {
                $result.text('Event: onCheck, data: ' + JSON.stringify(row));
            },
            onUncheck: function (row) {
                $result.text('Event: onUncheck, data: ' + JSON.stringify(row));
            },
            onCheckAll: function () {
                $result.text('Event: onCheckAll');
            },
            onUncheckAll: function () {
                $result.text('Event: onUncheckAll');
            },
            onLoadSuccess: function (data) {
                $result.text('Event: onLoadSuccess, data: ' + data);
            },
            onLoadError: function (status) {
                $result.text('Event: onLoadError, data: ' + status);
            },
            onColumnSwitch: function (field, checked) {
                $result.text('Event: onSort, data: ' + field + ', ' + checked);
            },
            onPageChange: function (number, size) {
                $result.text('Event: onPageChange, data: ' + number + ', ' + size);
            },
            onSearch: function (text) {
                $result.text('Event: onSearch, data: ' + text);
            }
            */
        }).on('all.bs.table', function (e, name, args) {
            //alert('1');
            //set_switchery();
        }).on('click-row.bs.table', function (e, row, $element) {
            
        }).on('dbl-click-row.bs.table', function (e, row, $element) {
            
        }).on('sort.bs.table', function (e, name, order) {
            
        }).on('check.bs.table', function (e, row) {
            
        }).on('uncheck.bs.table', function (e, row) {
            
        }).on('check-all.bs.table', function (e) {
            
        }).on('uncheck-all.bs.table', function (e) {
            
        }).on('load-success.bs.table', function (e, data) {
            //set_switchery();
        }).on('load-error.bs.table', function (e, status) {
            
        }).on('column-switch.bs.table', function (e, field, checked) {
            
        }).on('page-change.bs.table', function (e, size, number) {
            //alert('1');
            //set_switchery();
        }).on('search.bs.table', function (e, text) {
            
        });
    });

</script>