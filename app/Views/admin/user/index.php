<?= $this->extend('admin/template/main'); ?>

<?= $this->section('table'); ?>
<!-- Card -->
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/order'); ?>">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/product'); ?>">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/account/admin'); ?>">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('admin/account/user'); ?>">User</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <h3>Table Account User</h3>
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
            url: "<?= base_url('admin/account/user/viewtable'); ?>",
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
    });

    function del(user_id) {
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
                    url: "<?= base_url('admin/account/user/deleteProduct'); ?>",
                    dataType: "json",
                    data: {
                        user_id: user_id
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