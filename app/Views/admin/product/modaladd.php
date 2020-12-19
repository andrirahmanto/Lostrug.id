<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>/admin/addadmin" method="post" class="user" enctype="multipart/form-data">
                    <!-- name -->
                    <div class="form-group">
                        <label>Name</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <!-- Price -->
                    <div class="form-group">
                        <label>Price</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <!-- Stock -->
                    <div class="form-group">
                        <label>Stock</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <!-- image -->
                    <div class="form-group">
                        <label>Image</label>
                        <div class="card-body">
                            <div class="form-group">
                                <input type="file" name="file_upload" id="" required>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Add Product</button>
            </div>
        </div>
    </div>
</div>