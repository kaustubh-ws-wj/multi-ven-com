<div class="content-wrapper">
  <div class="col-8 grid-margin stretch-card " style="margin: 0 auto; width:80%;" >
    <div class="card">
      <div class="card-body">
        <h2 class="card-title" style="text-align:center;">ADD SUB CATEGORY</h2>
        <br>
        <form class="cmxform" id="commentForm" method="POST" action="<?php echo base_url();?>admin/sub_category/do_add" enctype="multipart/form-data">
          <fieldset>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control form-control-lg" name="category_id" id="exampleFormControlSelect1">
                <option value="">--Select Parent Categories--</option>
                <?php foreach($categories as $cat){ ?>
                    <option value="<?php echo $cat->id ?>"><?php echo $cat->category_name; ?></option>
                <?php } ?> 
              </select>
            </div>
            <div class="form-group">
              <label for="cname">Sub Category Name</label>
              <input id="cname" class="form-control" name="sub_category_name" minlength="2" type="text" required>
            </div>
            <div class="form-group">
              <label for="exampleInputText">Description</label>
              <textarea class="form-control" name="sub_category_desc" id="exampleTextarea1" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control form-control-lg" name="status" id="exampleFormControlSelect1">
                <option value="Active">Active</option>
                <option value="Deactive">Deactive</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="<?php echo base_url();?>admin/category" class="btn btn-light">Cancel</a>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
