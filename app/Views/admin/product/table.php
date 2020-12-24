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
<script>
    $(document).ready(function() {
        // datatable
        $('#tabel-orders').DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>