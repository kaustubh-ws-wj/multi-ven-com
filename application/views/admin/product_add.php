<div class="content-wrapper">

<div class="col-8 grid-margin stretch-card " style="margin: 0 auto; width:80%;" >
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="text-align:center;">ADD PRODUCT</h2>
        <br>
        <form action="<?php echo base_url();?>admin/product/do_add" method="POST" class="forms-sample" enctype="multipart/form-data">
          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputName1" placeholder="Title">
          </div>
          <div class="form-group">
            <label for="exampleInputText">Description</label>
            <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"></textarea>
          </div>
          <div class="row">
          <div class="col-md-6">
          <div class="form-group">
          <label for="exampleFormControlSelect1">Category</label>
          <select class="form-control form-control-lg" name="category" id="exampleFormControlSelect1">
            <option value="1" >Costume Designer</option>
            <option value="2">T-Shirts</option>
            <option value="3">Electronics</option>
          </select>
        </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
          <label for="exampleFormControlSelect1">Sub Category</label>
          <select class="form-control form-control-lg" name="sub_category" id="exampleFormControlSelect1">
            <option value="1">Costume Designer</option>
            <option value="2">T-Shirts</option>
            <option value="3">Electronics</option>
          </select>
        </div>
        </div>
        </div>
          <div class="form-group">
            <label>Image Upload</label>
            <input type="file" multiple name="images[]" onchange="preview(this);" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <span id="previewImg"></span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPrice1">Sale Price</label>
                <input type="text" class="form-control" name="sale_price" id="exampleInputPrice1" placeholder="Sale Price">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleQuantity1">Quantity</label>
                <input type="text" class="form-control" name="current_stock" id="exampleInputQuantity" placeholder="Current Stock">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label>Status</label>
              <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                <option value="Active">Active</option>
                <option value="Deactive">Deactive</option>
              </select>
            </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <a href="<?php echo base_url();?>admin/product" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
</div>

<script>


(function($) {
  'use strict';
  $(function() {

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



    $('.file-upload-browse').on('click', function() {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function() {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
  });
})(jQuery);</script>