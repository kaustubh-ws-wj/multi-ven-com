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
                <select class="form-control form-control-lg" name="category" id="category">
                  <option value="1" >-Select Category-</option>
                  <?php foreach($category as $value){?>
                  <option value="<?php echo $value['id']; ?>"><?php echo $value['category_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Sub Category</label>
                <select class="form-control form-control-lg" name="sub_category" id="sub_category">
                  <option value="">-Select Sub Category-</option>
                
                </select>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Sub Sub Category</label>
                <select class="form-control form-control-lg" name="sub_sub_category" id="sub_sub_category">
                  <option value="">-Select Sub Sub Category-</option>    
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


    $('#category').on('change',function(){
        var category_id = $('#category').val();
        if(category_id !="" || category_id != null){
            $.ajax({
                url:site_url+"admin/sub_category/get_sub_cat_by_cat",
                data:{'category_id':category_id},
                type:'POST',
                dataType:'JSON',
                success:function(response){
                  //var parsedobj = JSON.parse(response.sub_category);
                  var appenddata='<option value="">--Select Sub Categories--</option>';
                  $.each(response.sub_category, function(index, value) 
                  {   
                      appenddata += "<option value = '" + value.id + "'>" + value.sub_category_name + " </option>";    
                  });
                  $('#sub_category').html(appenddata);
                }
            });
        }
    });

    $('#sub_category').on('change',function(){
        var sub_category_id = $('#sub_category').val();
        if(sub_category_id !="" || sub_category_id != null){
            $.ajax({
                url:site_url+"admin/sub_sub_category/get_sub_sub_cat_by_cat",
                data:{'sub_category_id':sub_category_id},
                type:'POST',
                dataType:'JSON',
                success:function(response){
                  //var parsedobj = JSON.parse(response.sub_category);
                  var appenddata='<option value="">--Select Sub Sub Categories--</option>';
                  $.each(response.sub_sub_category, function(index, value) 
                  {   
                      appenddata += "<option value = '" + value.id + "'>" + value.sub_sub_cat_name + " </option>";    
                  });
                  $('#sub_sub_category').html(appenddata);
                }
            });
        }
    });


  });
})(jQuery);
</script>