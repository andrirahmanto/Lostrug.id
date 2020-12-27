<table id="tabel-orders display nowarp" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Orders Date</th>
            <th>Orders Code</th>
            <th>Buyer</th>
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
                <td><?php echo $data['order_user']['user_name']; ?></td>
                <td><?php echo "Rp " . number_format($data['order_total_price'], 0, '', '.'); ?></td>
                <td><?php echo $data['order_status']['status_keterangan']; ?></td>
                <td>
                    <div class="btn-group">
                        <a type="button" class="btn btn-primary btn-sm" onclick="edit('<?php echo $data['order_id']; ?>')"><i class="fas fa-edit"></i></a>
                        <a type="button" class="btn btn-danger btn-sm" onclick="del('<?php echo $data['order_id']; ?>')"><i class="fas fa-trash-alt"></i></a>
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