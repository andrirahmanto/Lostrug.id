<?= $this->extend('admin/template/main'); ?>

<?= $this->section('table'); ?>
<!-- Tabel -->
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <a type="button" class="btn btn-success float-right mb-3 addbutton">Add Product</a>
        <table id="tabel-orders" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($products as $key => $data) { ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td>
                            <img class="img-fluid" style="width: 100px;" src="<?php echo base_url('/assets/image/' . $data['product_image']); ?>" alt="">
                        </td>
                        <td><?php echo $data['product_name'] . ' ' . $data['product_info']; ?></td>
                        <td><?php echo "Rp " . number_format($data['product_price'], 0, '', '.'); ?></td>
                        <td><?php echo $data['product_stock']; ?></td>
                        <td>
                            <div class="btn-group">
                                <a href="admin/detail/product/" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaleditproduct"><i class="fas fa-edit"></i></a>
                                <a href="admin/delete/product/" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- End Table -->
<div class="viewmodal" style="display: none;"></div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        $('#tabel-orders').DataTable({
            "responsive": true,
            "autoWidth": false,
        });

        $('.addbutton').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: "admin/product/add",
                dataType: "json",
                success: function(response) {
                    $('.viewmodal').html(response.data).show();

                    $('#modaladd').modal('show');
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alret(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</script>
<?= $this->endSection(); ?>