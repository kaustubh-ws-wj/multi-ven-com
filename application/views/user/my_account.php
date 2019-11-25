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
                    <li class="active"><a href="<?php echo base_url();?>vendor/dashboard">Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>vendor/products">Products</a></li>
                    <li><a href="<?php echo base_url();?>vendor/orders">Order</a></li>
                    <li><a href="<?php echo base_url();?>vendor/settings">Setting</a></li>
                    <li><a href="<?php echo base_url();?>home">View Store</a></li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="tab-content">
                <div id="dashboard" class="tab-pane fade in active">    
                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                        <div class="coupon">                    
                            <input type="text" placeholder="Start date" />
                            <input type="text" placeholder="End date" />
                            <input type="submit" value="Update Report" />
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-content table-responsive">
                            <table >
                                <thead>
                                    <tr>
                                        <th >Date</th>
                                        <th >Product</th>
                                        <th >Price</th>
                                        <th >Sold</th>
                                        <th >Commission</th>
                                        <th >Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="amount">18-Nov-2019</span></td>
                                        <td><a href="#">Sample Product</a></td>
                                        <td><span class="amount">£125.00</span></td>
                                        <td><span class="amount">1</span></td>
                                        <td>£125.00</td>
                                        <td><span class="amount">10%</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="amount">18-Nov-2019</span></td>
                                        <td><a href="#">Sample Product</a></td>
                                        <td><span class="amount">£125.00</span></td>
                                        <td><span class="amount">1</span></td>
                                        <td>£125.00</td>
                                        <td><span class="amount">10%</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="amount">18-Nov-2019</span></td>
                                        <td><a href="#">Sample Product</a></td>
                                        <td><span class="amount">£125.00</span></td>
                                        <td><span class="amount">1</span></td>
                                        <td>£125.00</td>
                                        <td><span class="amount">10%</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="amount">18-Nov-2019</span></td>
                                        <td><a href="#">Sample Product</a></td>
                                        <td><span class="amount">£125.00</span></td>
                                        <td><span class="amount">1</span></td>
                                        <td>£125.00</td>
                                        <td><span class="amount">10%</span></td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td colspan='3'>Total</td>
                                        <td>2 Sale</td>
                                        <td colspan="2">£650.00</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-content table-responsive">
                            <table >
                                <thead>
                                    <tr>
                                        <th >Date</th>
                                        <th >Product</th>
                                        <th >Price</th>
                                        <th >Sold</th>
                                        <th >Commission</th>
                                        <th >Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="amount">18-Nov-2019</span></td>
                                        <td><a href="#">Sample Product</a></td>
                                        <td><span class="amount">£125.00</span></td>
                                        <td><span class="amount">1</span></td>
                                        <td>£125.00</td>
                                        <td><span class="amount">10%</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="amount">18-Nov-2019</span></td>
                                        <td><a href="#">Sample Product</a></td>
                                        <td><span class="amount">£125.00</span></td>
                                        <td><span class="amount">1</span></td>
                                        <td>£125.00</td>
                                        <td><span class="amount">10%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="products" class="tab-pane fade">
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <div class="coupon pull-right">                    
                            <button class="my-btn" id="vendor-add-product">Add Product</button>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                        
                        <div class="table-content table-responsive" id="vendor-product-list">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="images/cart/3.jpg" alt="" /></a></td>
                                        <td class="product-name"><a href="#">Sample Product</a></td>
                                        <td class="product-price"><span class="amount">£125.00</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>
                                        <td class="product-subtotal">£125.00</td>
                                        <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="images/cart/4.jpg" alt="" /></a></td>
                                        <td class="product-name"><a href="#">Sample Product</a></td>
                                        <td class="product-price"><span class="amount">£90.00</span></td>
                                        <td class="product-quantity"><input type="number" value="1" /></td>
                                        <td class="product-subtotal">£90.00</td>
                                        <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="checkbox-form" >
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Title</label>
                                            <input type="text" id="" name="title" id="title" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Description</label>
                                            <textarea id="description"  style="border: 1px solid #e5e5e5;height: 90px;padding: 15px;width: 100%;" cols="30" rows="10" placeholder="Description" autocomplete="off" spellcheck="false"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control" name="category" id="category">
                                            <option value="">-- Select Category --</option>
                                            <option value="1">Costume Designer</option>
                                            <option value="2">T-shirts</option>
                                            <option value="2">Electronics</option>
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
                                            <option value="2">Electronics</option>
                                            </select>
                                            <span id="err_cust_type" style="color:red;"></span>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Image <span class="required">*</span></label>
                                            <input type="file" name="images"  placeholder="Images" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Sale Price<span class="required">*</span></label>
                                            <input type="text"name="sale_price" id="sale-price" placeholder="Sale Price" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="checkout-form-list">
                                            <label>Quantity<span class="required">*</span></label>
                                            <input type="text" name="purchase_price" id="purchase-price" placeholder="Purchase Price" />
                                        </div>
                                    </div>
                                </div>
                                   
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div id="order" class="tab-pane fade">  
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-content table-responsive">
                            <table >
                                <thead>
                                    <tr>
                                        <th >Date</th>
                                        <th >Product</th>
                                        <th >Price</th>
                                        <th >Sold</th>
                                        <th >Commission</th>
                                        <th >Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="amount">18-Nov-2019</span></td>
                                        <td><a href="#">Sample Product</a></td>
                                        <td><span class="amount">£125.00</span></td>
                                        <td><span class="amount">1</span></td>
                                        <td>£125.00</td>
                                        <td><span class="amount">10%</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="amount">18-Nov-2019</span></td>
                                        <td><a href="#">Sample Product</a></td>
                                        <td><span class="amount">£125.00</span></td>
                                        <td><span class="amount">1</span></td>
                                        <td>£125.00</td>
                                        <td><span class="amount">10%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="setting" class="tab-pane fade">
                    <form action="#">
                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                            <div class="checkbox-form">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="country-select">
                                                <label>Country <span class="required">*</span></label>
                                                <select>
                                                    <option value="volvo">bangladesh</option>
                                                    <option value="saab">Algeria</option>
                                                    <option value="mercedes">Afghanistan</option>
                                                    <option value="audi">Ghana</option>
                                                    <option value="audi2">Albania</option>
                                                    <option value="audi3">Bahrain</option>
                                                    <option value="audi4">Colombia</option>
                                                    <option value="audi5">Dominican Republic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="checkout-form-list">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                       
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="checkout-form-list">
                                                <label>Phone  <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" />
                                            </div>
                                        </div>
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