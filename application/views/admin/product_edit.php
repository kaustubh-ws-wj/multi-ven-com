<div class="content-wrapper">

<div class="col-8 grid-margin stretch-card " style="margin: 0 auto; width:80%;" >
<?php foreach($product_data as $row) { ?>
                <div class="card">
                  <div class="card-body">
                    <h2 class="card-title" style="text-align:center;">EDIT PRODUCT</h2>
                    <br>
                    <form class="forms-sample" method="post" action="<?php echo base_url();?>admin/product/update/<?php echo $row['id']?>" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="" value="<?php echo $row['title'];?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputText">Description</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" <?php echo $row['description'];?>></textarea>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                      <label for="exampleFormControlSelect1">Category</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                      <option value="">-- Select Category --</option>
                        <option value="1" <?php echo ($row['category'] == '1')?'selected':'' ?>>Costume Designer</option>
                        <option value="2" <?php echo ($row['category'] == '2')?'selected':'' ?>>T-Shirts</option>
                        <option value="3" <?php echo ($row['category'] == '3')?'selected':'' ?>>Electronics</option>
                      </select>
                    </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <label for="exampleFormControlSelect1">Sub Category</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                      <option value="">-- Select Sub-Category --</option>
                        <option value="1" <?php echo ($row['category'] == '1')?'selected':'' ?>>Costume Designer</option>
                        <option value="2" <?php echo ($row['category'] == '2')?'selected':'' ?>>T-Shirts</option>
                        <option value="3" <?php echo ($row['category'] == '3')?'selected':'' ?>>Electronics</option>
                      </select>
                    </div>
                    </div>
                    </div>
                      <div class="form-group">
                        <label>Image Upload</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputPrice1">Sale Price</label>
                        <input type="text" class="form-control" id="exampleInputPrice1" placeholder="" value="<?php echo $row['sale_price']; ?>">
                      </div>
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleQuantity1">Quantity</label>
                        <input type="text" class="form-control" id="exampleInputQuantity" placeholder="" value="<?php echo $row['current_stock']; ?>">
                      </div>
                      </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
</div>
<script>(function($) {
  'use strict';
  $(function() {
    $('.file-upload-browse').on('click', function() {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function() {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
  });