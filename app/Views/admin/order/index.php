<?= $this->extend('admin/template/main'); ?>

<?= $this->section('table'); ?>
<!-- Card -->
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="<?= base_url('admin/order'); ?>">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/product'); ?>">Product</a>
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
        <h3>Table Order</h3>
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
            url: "<?= base_url('admin/order/viewtable'); ?>",
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
</script>
<?= $this->endSection(); ?>