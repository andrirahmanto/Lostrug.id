<table id="tabel-orders" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Orders Date</th>
            <th>Orders Code</th>
            <th>Address</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $key => $data) { ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $convertDate = date("d M Y", strtotime($data['created_at'])); ?></td>
                <td><?php echo $data['order_key']; ?></td>
                <td><?php echo $data['order_address']; ?></td>
                <td><?php echo "Rp " . number_format($data['order_total_price'], 0, '', '.'); ?></td>
                <td><?php echo $data['order_status']['status_keterangan']; ?></td>
                <td>

                    <div class="btn-group">
                        <?php if ($data['status_id'] == 1) : ?>
                            <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalpayorder"><i class="fas fa-money-bill-wave"></i></a>
                        <?php else : ?>
                            <a href="#" class="btn btn-secondary btn-sm disabled" data-toggle="modal" data-target="#modalpayorder"><i class="fas fa-money-bill-wave"></i></a>
                        <?php endif; ?>
                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaleditorder"><i class="fas fa-info-circle"></i></a>
                        <?php if ($data['status_id'] < 3) : ?>
                            <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan ini?')"><i class="fas fa-trash-alt"></i></a>
                        <?php else : ?>
                            <a href="#" class="btn btn-secondary btn-sm disabled" onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan ini?')"><i class="fas fa-trash-alt"></i></a>
                        <?php endif; ?>
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