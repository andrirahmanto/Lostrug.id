<?= $this->extend('admin/template/main'); ?>

<?= $this->section('title'); ?>
<title>ADMIN | PRODUCT</title>
<?= $this->endSection(); ?>

<?= $this->section('table'); ?>
<!-- Card -->
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/order'); ?>">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('admin/product'); ?>">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/account/admin'); ?>">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/account/user'); ?>">User</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h3>Table Product</h3>
        <a type="button" class="btn btn-success float-right mb-3 addbutton">Add Product</a>
        <div class="viewtable"></div>
    </div>
</div>
<!-- End Card -->
<div class="viewmodal" style="display: none;"></div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    function viewtable() {
        $.ajax({
            url: "<?= base_url('admin/product/viewtable'); ?>",
            dataType: "json",
            success: function(response) {
                $('.viewtable').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        })
    }

    $(document).ready(function() {
        // get table
        viewtable();

        // open modal add product
        $('.addbutton').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "<?= base_url('admin/product/viewadd'); ?>",
                dataType: "json",
                success: function(response) {
                    $('.viewmodal').html(response.data).show();
                    $('#modaladd').modal('show');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });

    function edit(product_id) {
        $.ajax({
            type: "post",
            url: "<?= base_url('admin/product/viewedit'); ?>",
            dataType: "json",
            data: {
                product_id: product_id
            },
            success: function(response) {
                if (response.success) {
                    $('.viewmodal').html(response.success).show();
                    $('#modaledit').modal('show');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    };

    function del(product_id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to delete this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: "<?= base_url('admin/product/deleteProduct'); ?>",
                    dataType: "json",
                    data: {
                        product_id: product_id
                    },
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'success',
                                text: response.success
                            })
                            viewtable();
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });
            }
        })
    };
</script>
<?= $this->endSection(); ?>