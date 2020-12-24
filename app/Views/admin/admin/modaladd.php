<div class="modal fade" id="modaladd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/account/admin/createAdmin', ['class' => 'formaddadmin']); ?>
            <?= csrf_field(); ?>
            <!-- , 'enctype' => 'multipart/form-data' -->
            <div class="modal-body">
                <!-- name -->
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="name" name="name" required>
                        <div class="invalid-feedback errorname"></div>
                    </div>
                </div>
                <!-- email -->
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback erroremail"></div>
                    </div>
                </div>
                <!-- password -->
                <div class="form-group">
                    <label>Password</label>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div class="invalid-feedback errorpassword"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-addadmin">Add Admin</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<Script>
    $(document).ready(function() {
        $('.formaddadmin').submit(function(e) {
            e.preventDefault();
            let form = $('.formaddadmin')[0];
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
                    $('.btn-addadmin').attr('disabled', 'disabled');
                    $('.btn-addadmin').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btn-addadmin').removeAttr('disabled');
                    $('.btn-addadmin').html('Add Product');
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
                        if (response.error.email) {
                            $('#email').addClass('is-invalid');
                            $('.erroremail').html(response.error.email);
                        } else {
                            $('#email').removeClass('is-invalid');
                            $('.erroremail').html('');
                        };
                        if (response.error.password) {
                            $('#password').addClass('is-invalid');
                            $('.errorpassword').html(response.error.password);
                        } else {
                            $('#password').removeClass('is-invalid');
                            $('.errorpassword').html('');
                        };
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: response.success
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