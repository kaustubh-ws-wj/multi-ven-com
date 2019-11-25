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
                            <button class="btn btn-sm btn-primary">Add Product</button>
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
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Current Stock</th>
                    <th>Category</th>
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
    $('#product-listing').DataTable({
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        
    });
</script>