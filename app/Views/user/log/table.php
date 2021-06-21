<table id="tabel-orders" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Role</th>
            <th>Email</th>
            <th>Activity</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($logs as $key => $data) { ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $convertDate = date("d M Y", strtotime($data['created_at'])); ?></td>
                <td><?php echo $data['log_role']; ?></td>
                <td><?php echo $data['log_email']; ?></td>
                <td><?php echo $data['log_activity']; ?></td>
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