<div class="content-wrapper">
    <div class="card">
        <div class="card-body">
            <form id="xform" onsubmit="return bulkDelete('product')">
                <input type="hidden" name="key" value="id"/>
                <input type="hidden" name="tab" value="product"/>
                <div class="row grid-margin">
                    <div class="col-12">
                        <div class="d-flex justify-content-between" style="padding:10px;">
                            <div>
                                <h5>Products</h5>
                            </div>
                            <div>
                                <span class="pull-right btn-group">
                                    <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/product/add'); ?>"><i class="icon icon-plus"></i></a>
                                    <button type="button" class="btn btn-sm btn-secondary" onclick="oTable.draw();" title="Refresh"><i class="icon icon-refresh"></i></button>
                                    <button type="button" class="btn btn-sm btn-info" onclick="exceldownload()" title="Excel Download"><i class="icon  icon-list"></i></button>                                        
                                    <button type="submit" class="btn btn-sm btn-danger" title="Delete Product"><i class="icon  icon-trash"></i></button>
                                </span>
                                <div class="clearfix"></div>
                                <!-- <a href="<?php echo base_url();?>admin/product/add" class="btn btn-sm btn-primary">Add Product</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-12">
                    <div class="table-responsive">
                        <table id="product-listing" class="dataTable table table-bordered table-hover">
                        <thead>
                            <tr>
                            <th style="min-width:30px; width: 30px; text-align: center;">
                                <input class="select_all" type="checkbox" name="select_all" value="1"/>
                            </th>
                            <th >Image</th>
                            <th >Title</th>
                            <th >Price</th>
                            <th >Current Stock</th>
                            <th >Category</th>
                            <th >Status</th>
                            <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {

        oTable = $('#product-listing').DataTable({
            "aaSorting": [[0, "asc"]],
            "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            "iDisplayLength": 10,
            'bProcessing': true, 'bServerSide': true,
            'sAjaxSource': '<?= site_url('admin/product/list') ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
            },
            'fnRowCallback': function (nRow, aData, iDisplayIndex) {
                nRow.id = aData[0];
                nRow.className = "";
                return nRow;
            },
            "aoColumns": [{"bSortable": false, "mRender": checkbox}, {'mRender': function (nRow, aData, iDisplayIndex) { return '<img style="height:100px;width:100px;" src="" alt=""></>';
   } },{'mRender': null},{'mRender': null},{'mRender': null},{'mRender': null}, {'mRender': setStatus}, {"bSortable": false}],
            "fnCreatedRow": function (nRow, aData, iDataIndex) {
                $('td:eq(6) > label', nRow).attr('onclick', "changeStatus('id'," + aData[0] + ",'product')");
                $('td:eq(1) > img', nRow).attr('onload', "setProdImg('"+aData[0]+"','product')");
            },
            "fnFooterCallback": function (nRow, aaData, iStart, iEnd, aiDisplay) {
            }
        })
    });
</script>
<!-- <script>
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
</script> -->