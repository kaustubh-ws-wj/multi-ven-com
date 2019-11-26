<div class="content-wrapper">
<?php foreach($product_data as $row){ ?>
<div class="row">
              <div class="col-6" style="margin: 0 auto; width:80%;">
                <div class="card" method="POST" action="<?php echo base_url();?>admin/product/update/<?php echo $row['id'];?>" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="border-bottom text-center pb-4">
                        <h2><?php echo $row['title'];?></h2>
                        </div>
                            <div class="row grid-margin">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                          <h4 class="card-title">Images</h4>
                                            <div class="owl-carousel owl-theme rtl-carousel">
                                                <div class="item">
                                                    <img src="../../../assets/images/carousel/banner_6.jpg" />
                                                </div>
                                                    <div class="item">
                                                        <img src="../../../assets/images/carousel/banner_9.jpg" />
                                                    </div>
                                                        <div class="item">
                                                          <img src="../../../assets/images/carousel/banner_12.jpg" />
                                                        </div>
                                                            <div class="item">
                                                                <img src="../../../assets/images/carousel/banner_3.jpg" />
                                                            </div>
                                                                <div class="item">
                                                                        <img src="../../../assets/images/carousel/banner_7.jpg" />
                                                                </div>
                                                            <div class="item">
                                                               <img src="../../../assets/images/carousel/banner_10.jpg" />
                                                            </div>
                                                            <div class="item">
                                                                <img src="../../../assets/images/carousel/banner_2.jpg" />
                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="border-bottom py-4">
                        <div class="product-reveiw">
                                <h4>Description:</h4>
                                <p><?php echo $row['description'];?></p>
                            </div>
                        </div>
                        <div class="py-4">
                          <p class="clearfix">
                            <span class="float-left"> Sale Price </span>
                            <span class="float-right text-muted">$<?php echo $row['sale_price'];?></span>
                          </p>
                          <p class="clearfix">
                            <span class="float-left"> Quantity </span>
                            <span class="float-right text-muted"><?php echo $row['current_stock'];?></span>
                          </p>
                          <p class="clearfix">
                            <span class="float-left"> Category </span>
                            <span class="float-right text-muted"><?php echo $row['category'];?></span>
                          </p>
                          <p class="clearfix">
                            <span class="float-left"> Sub Category </span>
                            <span class="float-right text-muted"><?php echo $row['sub_category'];?></span>
                          </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
</div>