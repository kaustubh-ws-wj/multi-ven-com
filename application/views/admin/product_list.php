<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="d-flex justify-content-between" style="padding:10px;">
                        <div>
                            <h5>Products</h5>
                        </div>
                        <div>
                            <a href="<?php echo base_url();?>admin/product/add" class="btn btn-sm btn-primary">Add Product</a>
                        </div>
                    </div>
                </div>
            </div>
        
        <div class="row">
            <div class="col-12">
            <div class="table-responsive">
                <table id="product-listing" class="table">
                <thead>
                    <tr>
                    <th> #</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Current Stock</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1 ; foreach($all_product as $row){ ?>
                        <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="text-center"><img src="<?php echo $this->Services_model->file_view('product',$row['id'],'','','thumb','src','multi','one'); ?>" style="height:100px;width:100px;"></td>
                        <td class="text-center"><?php echo $row['title'];?></td>
                        <td class="text-center"><?php echo $row['sale_price']; ?></td>
                        <td class="text-center"><?php echo $row['current_stock']; ?></td>
                        <td class="text-center"><?php echo (($row['category'] == 1) ? 'Costume Design': (($row['category'] == 2) ? 'T-Shirt': 'Other')) ; ?></td>
                        <td class="text-center"><label class="badge badge-success">Active</label></td>
                        <td class="text-center">
                            <a href="<?php echo base_url();?>admin/product/view/<?php echo $row['id']; ?>" class="btn btn-light">
                                  <i class="icon-eye text-primary"></i>
                            </a>
                            <a href="<?php echo base_url();?>admin/product/edit/<?php echo $row['id']; ?>" class="btn btn-light">
                                  <i class="icon-pencil text-success"></i>
                            </a>
                            <a  class="btn btn-light delete_confirm" data-id="<?php echo $row['id']; ?>">
                                  <i class="icon-close text-danger"></i>
                            </a>
                        </td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
          
<script>
    var base_url = '<?php echo base_url();?>';
    var table = $('#product-listing').DataTable({
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });

    $.ajaxPrefilter('script', function(options) { 
		options.cache = true; 
	});
	
	
    $('tbody').on('click','a.delete_confirm',function(){ 
		msg = '<div class="modal-title">Are You Sure To Delete ?</div>';
        id = $(this).data('id');
        here = this;
        
		bootbox.confirm(msg, function(result) {
            if (result) { 
                $.ajax({ 
                    url: base_url+'/admin/product/delete/'+id,
                    //cache: false, 
                    success: function(data) { 
                        $.toast({
                            heading: 'Success',
                            text: 'You Deleted Product Successfully!',
                            showHideTransition: 'slide',
                            icon: 'success',
                            loaderBg: '#f96868',
                            position: 'top-right'
                        })
                        table.row($(here).parents('tr')).remove().draw();
                    } 
                }); 
            }else{ 
                $.toast({
                    heading: 'Warning',
                    text: 'Product Delete Operation Cancled!',
                    showHideTransition: 'slide',
                    icon: 'warning',
                    loaderBg: '#57c7d4',
                    position: 'top-right'
                }); 
            }; 
		});
	});
</script>