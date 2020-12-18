<?= $this->extend('admin/template'); ?>
<?= $this->section('table'); ?>
<!-- Tabel -->
<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Account</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
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
                <tr>
                    <td>1</td>
                    <td>
                        <img class="img-fluid" style="width: 100px;" src="../assets/image/1604991081160.jpg" alt="">
                    </td>
                    <td>'Lost Struggle' T-shirt (balck)</td>
                    <td>Rp 189.000</td>
                    <td>12 pcs</td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaleditproduct"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <img class="img-fluid" style="width: 100px;" src="../assets/image/1604991081160.jpg" alt="">
                    </td>
                    <td>'Lost Struggle' T-shirt (balck)</td>
                    <td>Rp 189.000</td>
                    <td>12 pcs</td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modaleditproduct"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus barang ini?')"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- End Table -->

<?= $this->endSection(); ?>