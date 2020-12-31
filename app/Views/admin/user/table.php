<table id="tabel-users" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $data) { ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $data['user_name']; ?></td>
                <td><?php echo $data['user_email']; ?></td>
                <td>
                    <div class="btn-group">
                        <a type="button" class="btn btn-danger btn-sm" onclick="del('<?php echo $data['user_id']; ?>')"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        // datatable
        $('#tabel-users').DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>