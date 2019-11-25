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
                    <li><a href="<?php echo base_url();?>vendor/dashboard">Dashboard</a></li>
                    <li class="active"><a href="<?php echo base_url();?>vendor/product">Products</a></li>
                    <li><a href="<?php echo base_url();?>vendor/orders">Order</a></li>
                    <li><a href="<?php echo base_url();?>vendor/settings">Setting</a></li>
                    <li><a href="<?php echo base_url();?>home">View Store</a></li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="tab-content">
                <div id="products" class="tab-pane fade in active">
                    <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="coupon pull-left">                    
                                <a class="my-btn" id="vendor-add-product">Back</a>
                            </div>
                        </div>
                        <div class="col-md-7"><h2>ADD PRODUCTS</h2>
                    </div>
                    <div class="col-lg-push-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">                        
                       
                        <form class="checkbox-form" method="post" action="<?php echo base_url();?>vendor/product/do_add" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="border:1px solid black">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Title</label>
                                            <input type="text" id="title" name="title" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Description</label>
                                            <textarea id="description" name="description" style="border: 1px solid #e5e5e5;height: 90px;padding: 15px;width: 100%;" cols="30" rows="10" placeholder="Description" autocomplete="off" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category" id="category">
                                            <option value="">-- Select Category --</option>
                                            <option value="1">Costume Designer</option>
                                            <option value="2">T-shirts</option>
                                            <option value="3">Electronics</option>
                                            </select>
                                            <span id="err_cust_type" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Sub Category</label>
                                            <select class="form-control" name="sub_category" id="sub-category">
                                            <option value="">-- Select Sub-Category --</option>
                                            <option value="1">Costume Designer</option>
                                            <option value="2">T-shirts</option>
                                            <option value="3">Electronics</option>
                                            </select>
                                            <span id="err_cust_type" style="color:red;"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Image <span class="required">*</span></label>
                                            <input type="file" multiple name="images[]" onchange="preview(this);" placeholder="Images">
                                            <br>
                                            <span id="previewImg" ></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Sale Price<span class="required">*</span></label>
                                            <input type="text" name="sale_price" id="sale-price" placeholder="Sale Price">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Quantity<span class="required">*</span></label>
                                            <input type="text" name="current_stock" id="current_stock" placeholder="Current Stock">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="coupon pull-left">                    
                                            <button type="reset" class="my-btn" id="vendor-add-product">Reset</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="coupon pull-right">                    
                                            <button type="submit" class="my-btn" id="vendor-add-product">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
<script>
window.preview = function (input) {
    if (input.files && input.files[0]) {
        $("#previewImg").html('');
        $(input.files).each(function () {
            var reader = new FileReader();
            reader.readAsDataURL(this);
            reader.onload = function (e) {
                $("#previewImg").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img style='height:100px;width:100px;' src='" + e.target.result + "'></div>");
            }
        });
    }
}
</script>