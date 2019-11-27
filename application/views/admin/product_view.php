
<div class="content-wrapper">
<?php foreach($product_data as $row){ 
  $mains = $this->Services_model->file_view('product',$row['id'],'','','no','src','multi','all');
  ?>

  <style>
  .owl-carousel .owl-item img {
    transform-style: preserve-3d;
    height: 270px;
    width: 300px;
    margin-left: 185px;
}</style>
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
                    <h4 class="card-title">Product Images</h4>
                    <div class="owl-carousel owl-theme full-width">
                    <?php  
                      $i=1;
                      foreach($mains as $id => $row1){ 
                        // echo $thumbs[$th];
                      ?>
                      <div class="item">
                        <img src="<?php echo $mains[$id]; ?>" />
                      </div>
                      <?php
                     $i++;
                   }?>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
              <!-- <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product Images</h4>
                    <div class="owl-carousel owl-theme rtl-carousel">
                    </div>
                  </div>
                </div>
              </div> -->
           
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