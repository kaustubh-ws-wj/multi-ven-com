  <div class="content-wrapper">
    <div class="card">
      <div class="card-body">
        <div class="row grid-margin">
          <div class="col-12">
            <div class="d-flex justify-content-between" style="padding:10px;">
              <div>
                <h5>Category</h5>
              </div>
              <div>
              <span class="pull-right btn-group">
                <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/category/add'); ?>"><i class="icon icon-plus"></i></a>
                <button type="button" class="btn btn-sm btn-secondary" onclick="oTable.draw();" title="Refresh"><i class="icon icon-refresh"></i></button>
                <button type="button" class="btn btn-sm btn-info" onclick="exceldownload()" title="Excel Download"><i class="icon  icon-list"></i></button>                                        
                <button type="submit" class="btn btn-sm btn-danger" title="Delete Category"><i class="icon  icon-trash"></i></button>
              </span>
              <div class="clearfix"></div>
                <!-- <a href="<?php echo base_url();?>admin/category/add" class="btn btn-sm btn-primary">Add Category</a> -->
              </div>
            </div>
          </div>
        </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="category-listing" class="dataTable table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="min-width:30px; width: 30px; text-align: center;">
                    <input class="select_all" type="checkbox" name="select_all" value="1"/>
                  </th>
                  <th>Category Name</th>
                  <th>Description</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function () {
    oTable = $('#category-listing').DataTable({
    "aaSorting": [[0, "asc"]],
    "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    "iDisplayLength": 10,
    'bProcessing': true, 'bServerSide': true,
    'sAjaxSource': '<?= site_url('admin/category/list') ?>',
    'fnServerData': function (sSource, aoData, fnCallback) {
    $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
    },
    'fnRowCallback': function (nRow, aData, iDisplayIndex) {
    nRow.id = aData[0];
    nRow.className = "";
    return nRow;
    },
    // "aoColumns": [{"bSortable": false, "mRender": checkbox}, {'mRender': function (nRow, aData, iDisplayIndex) },{'mRender': null},{'mRender': null},{'mRender': null},{'mRender': null}, {'mRender': setStatus}, {"bSortable": false}],
    "fnCreatedRow": function (nRow, aData, iDataIndex) {
      $('td:eq(2) > label', nRow).attr('onclick', "changeStatus('id'," + aData[0] + ",'category')");
      $('td:eq(1) > img', nRow).attr('onload', "setProdImg('"+aData[0]+"','category')");
      },
      "fnFooterCallback": function (nRow, aaData, iStart, iEnd, aiDisplay) {
      }
    })
    });
</script>