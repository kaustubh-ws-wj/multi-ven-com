<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title"><?php echo $vendor_data[0]['vendor_type']; ?></h2>
          <i class="icon-feed"><h4> Profile </h4></i>
          <hr>
          <p class="clearfix">
            <span class="float-left"> User Id </span>
            <span class="float-right text-muted"> <?php echo $vendor_data[0]['user_id']; ?> </span>
          </p>
          <p class="clearfix">
            <span class="float-left"> Vendor Type </span>
            <span class="float-right text-muted"> <?php echo $vendor_data[0]['vendor_type']; ?> </span>
          </p>
          <p class="clearfix">
            <span class="float-left"> First Name </span>
            <span class="float-right text-muted"> <?php echo $vendor_data[0]['first_name']; ?>  </span>
          </p>
          <p class="clearfix">
            <span class="float-left"> Last Name </span>
            <span class="float-right text-muted"> <?php echo $vendor_data[0]['last_name']; ?>  </span>
          </p>
          <p class="clearfix">
            <span class="float-left"> Mail </span>
            <span class="float-right text-muted"> <?php echo $vendor_data[0]['email']; ?>  </span>
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Vendor Account</h4>
          <p class="card-description">Details</p>
          <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Settings</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="d-flex mb-4">
                <div class="table-responsive">
                  <table id="product-listing" class="dataTable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <!-- <th >Sr. No.</th> -->
                        <th >Date</th>
                        <th >Product</th>
                        <th >Price</th>
                        <th >Sold</th>
                        <th >Commission</th>
                        <th >Rate</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="media">
                <div class="table-responsive">
                  <table id="product-listing" class="dataTable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <!-- <th >Sr. No.</th> -->
                        <th >Title</th>
                        <th >Description</th>
                        <th >Category</th>
                        <th >Sub Category</th>
                        <th >Sale Price</th>
                        <th >Current Stock</th>
                        <!-- <th >Action</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($product_data as $value){?>
                      <tr>
                        <!-- <td><?= $i; ?></td> -->
                        <td><?= $value->title; ?></td>
                        <td><?= $value->description; ?></td>
                        <td><?= $value->category; ?></td>
                        <td><?= $value->sub_category; ?></td>
                        <td><?= $value->sale_price; ?></td>
                        <td><?= $value->current_stock; ?></td>
                      </tr>
                      <?php $i++; }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="media">
                <img class="mr-3 w-25 rounded" src="../../../assets/images/samples/300x300/14.jpg" alt="sample image">
                <div class="media-body">
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
              </div>
            </div>
          </div>        
        </div>  
      </div>
    </div>
  </div>
</div>