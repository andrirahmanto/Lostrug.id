<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/product/createProduct', ['class' => 'formaddproduct']); ?>
            <?= csrf_field(); ?>
            <!-- , 'enctype' => 'multipart/form-data' -->
            <div class="modal-body">
                <!-- image -->
                <div class="form-group">
                    <label>Image</label>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" id="image" name="image">
                        </div>
                    </div>
                </div>
                <!-- name -->
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback errorname"></div>
                    </div>
                </div>
                <!-- info -->
                <div class="form-group">
                    <label>info</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="info" name="info" required>
                        <div class="invalid-feedback errorinfo"></div>
                    </div>
                </div>
                <!-- Price -->
                <div class="form-group">
                    <label>Price</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="price" name="price" required>
                        <div class="invalid-feedback errorprice"></div>
                    </div>
                </div>
                <!-- Stock -->
                <div class="form-group">
                    <label>Stock</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="stock" name="stock" required>
                        <div class="invalid-feedback errorstock"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-addproduct">Add Product</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<Script>
    $(document).ready(function() {
        $('.formaddproduct').submit(function(e) {
            e.preventDefault();
            let form = $('.formaddproduct')[0];
            let data = new FormData(form);
            $.ajax({
                type: "post",
                url: $(this).attr("action"),
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                beforeSend: function() {
                    $('.btn-addproduct').attr('disabled', 'disabled');
                    $('.btn-addproduct').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btn-addproduct').removeAttr('disabled');
                    $('.btn-addproduct').html('Add Product');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.name) {
                            $('#name').addClass('is-invalid');
                            $('.errorname').html(response.error.name);
                        } else {
                            $('#name').removeClass('is-invalid');
                            $('.errorname').html('');
                        };
                        if (response.error.price) {
                            $('#price').addClass('is-invalid');
                            $('.errorprice').html(response.error.price);
                        } else {
                            $('#price').removeClass('is-invalid');
                            $('.errorprice').html('');
                        };
                        if (response.error.stock) {
                            $('#stock').addClass('is-invalid');
                            $('.errorstock').html(response.error.stock);
                        } else {
                            $('#stock').removeClass('is-invalid');
                            $('.errorstock').html('');
                        };
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: response.success,
                            text: 'yes'
                        })

                        $('#modaladd').modal('hide');
                        viewtable();
                    };

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</Script>