<div class="content-wrapper">
  <?php foreach($product_data as $row){ ?>
  <div class="col-8 grid-margin stretch-card " style="margin: 0 auto; width:80%;" >
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="text-align:center;">EDIT PRODUCT</h2>
        <br>
        <form class="forms-sample" method="POST" action="<?php echo base_url();?>admin/product/update/<?php echo $row['id'];?>" enctype="multipart/form-data" >
          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" class="form-control" id="exampleInputName1" name="title" value="<?php echo $row['title']; ?>" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputText">Description</label>
            <textarea class="form-control" id="exampleTextarea1" name="description" rows="4"><?php echo $row['description']; ?></textarea>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select class="form-control form-control-lg" name="category" id="category">
                  <option value="">-- Select Category --</option>
                  <?php foreach($category as $value){?>
                    <option value="<?php echo $value['id']; ?>" <?php echo ($row['category']==$value['id']) ? 'selected' : '' ?>><?php echo $value['category_name']; ?></option>
                  <?php }?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Sub Category</label>
                <select class="form-control form-control-lg" name="sub_category" id="sub_category">
                  <option value="">-- Select Sub Category --</option>
                  <?php foreach($sub_category as $value){ ?>
                    <option value="<?php echo $value['id']; ?>" <?php echo ($row['sub_category']==$value['id']) ? 'selected' : '' ?>><?php echo $value['sub_category_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Sub Category</label>
                <select class="form-control form-control-lg" name="sub_sub_category" id="sub_sub_category">
                  <option value="">-- Select Sub Sub Category --</option>
                  <?php foreach($sub_sub_category as $value){ ?>
                    <option value="<?php echo $value['id']; ?>" <?php echo ($row['sub_sub_category']==$value['id']) ? 'selected' : ''; ?>><?php echo $value['sub_sub_cat_name']; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Image Upload</label>
            <input type="file" multiple name="images[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled="" placeholder="">
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
            <div class="form-group">
              <?php
                $images = $this->Services_model->get_img_file('product',$row['id'],'','','thumb','src','multi','all');
                
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
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputPrice1">Sale Price</label>
                <input type="text" class="form-control" name="sale_price" value="<?php echo $row['sale_price'] ?>" id="exampleInputPrice1" placeholder="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exampleQuantity1">Quantity</label>
                <input type="text" class="form-control" name="current_stock" value="<?php echo $row['current_stock'] ?>" id="exampleInputQuantity" placeholder="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Status</label>
                <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                  <option value="Active" <?php echo ($row['status'] == 'Active')?'selected':'' ?>>Active</option>
                  <option value="Deactive" <?php echo ($row['status'] == 'Deactive')?'selected':'' ?>>Deactive</option>
                </select>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Update</button>
          <a href="<?php echo base_url();?>admin/product" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<script>
  (function($) {
  'use strict';
  $(function() {

    var base_url= '<?php echo base_url();?>';
    $('.delete-div-wrap .close').on('click', function() { 
        var pid = $(this).closest('.delete-div-wrap').find('img').data('id'); 
        alert(pid);
        var here = $(this); 
        var msg = 'Really want to delete this Image?'; 
        bootbox.confirm(msg, function(result) {
            if (result) { 
                $.ajax({ 
                    url: base_url+'/admin/product/dlt_img/'+pid,
                    //cache: false, 
                    success: function(data) { 
                      $.toast({
                            heading: 'Success',
                            text: 'Product Image Deleted Successfully!',
                            showHideTransition: 'slide',
                            icon: 'success',
                            loaderBg: '#f96868',
                            position: 'top-right'
                        })
                        here.closest('.delete-div-wrap').remove(); 
                    } 
                }); 
            }else{ 
              $.toast({
                    heading: 'Danger',
                    text: 'Product Image Delete Operation Cancled!',
                    showHideTransition: 'slide',
                    icon: 'warning',
                    loaderBg: '#57c7d4',
                    position: 'top-right'
                }); 
            }; 
        }); 
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

    $('.file-upload-browse').on('click', function() {
      var file = $(this).parent().parent().parent().find('.file-upload-default');
      file.trigger('click');
    });
    $('.file-upload-default').on('change', function() {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
  });
})(jQuery);
</script>