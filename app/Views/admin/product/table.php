<table id="tabel-products" class="table table-bordered table-hover">
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
                        <a type="button" class="btn btn-primary btn-sm" onclick="edit('<?php echo $data['product_id']; ?>')"><i class="fas fa-edit"></i></a>
                        <a type="button" class="btn btn-danger btn-sm" onclick="del('<?php echo $data['product_id']; ?>')"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        // datatable
        $('#tabel-products').DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>