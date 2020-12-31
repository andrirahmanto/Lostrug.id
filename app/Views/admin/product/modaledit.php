<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/product/updateProduct', ['class' => 'formeditproduct']); ?>
            <?= csrf_field(); ?>
            <!-- , 'enctype' => 'multipart/form-data' -->
            <div class="modal-body">
                <!-- id -->
                <input type="hidden" value="<?= $id; ?>" name="id">
                <!-- name -->
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                        <div class="invalid-feedback errorname"></div>
                    </div>
                </div>
                <!-- info -->
                <div class="form-group">
                    <label>info</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="info" name="info" value="<?php echo $info; ?>" required>
                        <div class="invalid-feedback errorinfo"></div>
                    </div>
                </div>
                <!-- Price -->
                <div class="form-group">
                    <label>Price</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="price" name="price" value="<?php echo $price; ?>" required>
                        <div class="invalid-feedback errorprice"></div>
                    </div>
                </div>
                <!-- Stock -->
                <div class="form-group">
                    <label>Stock</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="stock" name="stock" value="<?php echo $stock; ?>" required>
                        <div class="invalid-feedback errorstock"></div>
                    </div>
                </div>
                <!-- image -->
                <div class="form-group">
                    <label>Image</label>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" id="image" name="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-editproduct">Save Change</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<Script>
    $(document).ready(function() {
        $('.formeditproduct').submit(function(e) {
            e.preventDefault();
            let form = $('.formeditproduct')[0];
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
                    $('.btn-editproduct').attr('disabled', 'disabled');
                    $('.btn-editproduct').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btn-editproduct').removeAttr('disabled');
                    $('.btn-editproduct').html('Edit Product');
                },
                success: function(response) {
                    if (response.error) {
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
                            title: 'success',
                            text: response.success
                        })

                        $('#modaledit').modal('hide');
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