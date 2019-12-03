<div class="content-wrapper">
  <div class="col-8 grid-margin stretch-card " style="margin: 0 auto; width:80%;" >
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="text-align:center;">ADD SUB CATEGORY</h2>
        <br>
        <form class="cmxform" id="commentForm" method="POST" action="<?php echo base_url();?>admin/sub_sub_category/do_add" enctype="multipart/form-data">
          <fieldset>
            <div class="form-group">
              <label>Parent Category</label>
              <select class="form-control form-control-lg" name="category_id" id="category_id">
                <option value="">--Select Parent Categories--</option>
                <?php foreach($categories as $cat){ ?>
                    <option value="<?php echo $cat->id ?>"><?php echo $cat->category_name; ?></option>
                <?php } ?> 
              </select>
            </div>
            <div class="form-group">
              <label>Sub Category</label>
              <select class="form-control form-control-lg" name="sub_category_id" id="sub_category_id">
                <option value="">--Select Sub Categories--</option>
                    
              </select>
            </div>
            <div class="form-group">
              <label for="cname">Sub Category Name</label>
              <input id="cname" class="form-control" name="sub_sub_cat_name" minlength="2" type="text" required>
            </div>
            <div class="form-group">
              <label for="exampleInputText">Description</label>
              <textarea class="form-control" name="sub_sub_cat_desc" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                <option value="Active">Active</option>
                <option value="Deactive">Deactive</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="<?php echo base_url();?>admin/sub_sub_category" class="btn btn-light">Cancel</a>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('#category_id').on('change',function(){
        var category_id = $('#category_id').val();
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
                        $('#sub_category_id').html(appenddata);
                }
            });
        }
    });
});
</script>