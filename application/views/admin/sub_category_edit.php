<div class="content-wrapper">
  <?php foreach($sub_category_data as $row){ ?>
  <div class="col-8 grid-margin stretch-card " style="margin: 0 auto; width:80%;" >
    <div class="card">
      <div class="card-body">
      <h2 class="card-title" style="text-align:center;">EDIT SUB CATEGORY</h2>
      <br>
        <form class="forms-sample" method="POST" action="<?php echo base_url();?>admin/sub_category/update/<?php echo $row['id'];?>" enctype="multipart/form-data" >
          <div class="form-group">
            <label for="exampleInputName1">Sub Category Name</label>
            <input type="text" class="form-control" id="exampleInputName1" name="sub_category_name" value="<?php echo $row['sub_category_name']; ?>" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputText">Description</label>
            <textarea class="form-control" id="exampleTextarea1" name="sub_category_desc" rows="4"><?php echo $row['sub_category_desc']; ?></textarea>
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
          <a href="<?php echo base_url();?>admin/sub_category" class="btn btn-light">Cancel</a>
        </form>
      </div>
    </div>
  </div>
  <?php } ?>
</div>