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
        <?php foreach($product_data as $row) { ?>
        <div class="row">
            <div class="tab-content">
                <div id="products" class="tab-pane fade in active">
                    <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <div class="coupon pull-left">                    
                                <a class="my-btn" id="vendor-add-product">Back</a>
                            </div>
                        </div>
                        <div class="col-md-7"><h2>EDIT PRODUCT</h2>
                    </div>
                    <div class="col-lg-push-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">                        
                       
                        <form class="checkbox-form" method="post" action="<?php echo base_url();?>vendor/product/update/<?php echo $row['id']?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="border:1px solid black">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Title</label>
                                            <input type="text" id="title" name="title" placeholder="" value="<?php echo $row['title'];?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Description</label>
                                            <textarea id="description" name="description" style="border: 1px solid #e5e5e5;height: 90px;padding: 15px;width: 100%;" cols="30" rows="10" placeholder="Description" autocomplete="off" spellcheck="false"><?php echo $row['description'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category" id="category">
                                            <option value="">-- Select Category --</option>
                                            <option value="1" <?php echo ($row['category'] == '1')?'selected':'' ?>>Costume Designer</option>
                                            <option value="2" <?php echo ($row['category'] == '2')?'selected':'' ?>>T-shirts</option>
                                            <option value="3" <?php echo ($row['category'] == '3')?'selected':'' ?>>Electronics</option>
                                            </select>
                                            <span id="err_cust_type" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Sub Category</label>
                                            <select class="form-control" name="sub_category" id="sub-category">
                                            <option value="">-- Select Sub-Category --</option>
                                            <option value="1" <?php echo ($row['sub_category'] == '1')?'selected':'' ?>>Costume Designer</option>
                                            <option value="2" <?php echo ($row['sub_category'] == '2')?'selected':'' ?>>T-shirts</option>
                                            <option value="3" <?php echo ($row['sub_category'] == '3')?'selected':'' ?>>Electronics</option>
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                        <label>Current Images</label>
                                        <?php
                                            $images = $this->Services_model->file_view('product',$row['id'],'','','thumb','src','multi','all');
                                            if($images){
                                                if($images[0] != base_url().'uploads/product_image/default.jpg'){    
                                                foreach ($images as $row1){

                                                    $a = explode('.', $row1);

                                                    $a = $a[(count($a)-2)];

                                                    $a = explode('_', $a);

                                                    $p = $a[(count($a)-2)];

                                                    $i = $a[(count($a)-3)];

                                            ?>

                                            <div class="delete-div-wrap">

                                                <span class="close">&times;</span>

                                                <div class="inner-div">

                                                    <img class="img-responsive" width="100" src="<?php echo $row1; ?>" data-id="<?php echo $i.'_'.$p; ?>" alt="User_Image" >

                                                </div>

                                            </div>

                                            <?php 

                                                }

                                            } 
                                        }
                                            ?>


                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Sale Price<span class="required">*</span></label>
                                            <input type="text" name="sale_price" id="sale-price" value="<?php echo $row['sale_price']; ?>" placeholder="Sale Price">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Quantity<span class="required">*</span></label>
                                            <input type="text" name="current_stock" value="<?php echo $row['current_stock']; ?>" id="current_stock" placeholder="Current Stock">
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
        <?php } ?>
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
    var base_url = '<?php echo base_url();?>';
    window.preview = function (input) {
    if (input.files && input.files[0]) {
        $("#previewImg").html('');
        $(input.files).each(function () {
            var reader = new FileReader();
            reader.readAsDataURL(this);
            reader.onload = function (e) {
                $("#previewImg").append("<div style='float:left;border:4px solid #303641;padding:5px;margin:5px;'><img style='height:100px;width;100px;' src='" + e.target.result + "'></div>");
            }
        });
    }
    }



    $('.delete-div-wrap .close').on('click', function() { 
        var pid = $(this).closest('.delete-div-wrap').find('img').data('id'); 
        var here = $(this); 
        msg = 'Really want to delete this Image?'; 
        bootbox.confirm(msg, function(result) {
            if (result) { 
                $.ajax({ 
                    url: base_url+'/vendor/product/dlt_img/'+pid,
                    //cache: false, 
                    success: function(data) { 
                        $.notify({
                            message: 'Image Deleted !'
                            },{
                            type: 'success'
                            },{
                            placement :{
                                from:'bottom',
                                align:'right'
                            }
                        });
                        here.closest('.delete-div-wrap').remove(); 
                    } 
                }); 
            }else{ 
                $.notify({ 
                    message: 'Cancled !'
                            },{
                            type: 'danger'
                            },{
                            placement :{
                                from:'bottom',
                                align:'right'
                            } 
                }); 
            }; 
        }); 
    });

    
</script>