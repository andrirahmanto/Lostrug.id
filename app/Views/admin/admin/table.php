<table id="tabel-admin" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Name</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($admin as $key => $data) { ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $data['admin_name']; ?></td>
                <td><?php echo $data['admin_name']; ?></td>
                <td><?php echo $data['admin_name']; ?></td>
                <td><?php echo $data['admin_email']; ?></td>
                <td><?php echo $data['admin_password']; ?></td>
                <td>
                    <div class="btn-group">
                        <a type="button" class="btn btn-primary btn-sm" onclick="edit('<?php echo $data['admin_id']; ?>')"><i class="fas fa-edit"></i></a>
                        <a type="button" class="btn btn-danger btn-sm" onclick="del('<?php echo $data['admin_id']; ?>')"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        // datatable
        $('#tabel-admin').DataTable({
            "responsive": true
        });
    });
</script>