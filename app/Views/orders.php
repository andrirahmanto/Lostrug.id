    <div class="container">

        <!-- tabel -->
        <div class="row justify-content-center">
            <div class="col">
                <div class="card detail-card">
                    <div class="card-body">
                        <div class="row">
                        </div>
                        <table id="tabel-orders" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Orders Code</th>
                                    <th>Address</th>
                                    <th>Total Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>9048572390857</td>
                                    <td>Jalan Kramat Sentiong</td>
                                    <td>Rp 393.000</td>
                                    <td>Waiting for Confirmation</td>
                                    <td>

                                        <div class="btn-group">
                                            <a href="#" class="btn btn-success btn-sm" data-toggle="modal"
                                                data-target="#modalpayorder"><i class="fas fa-money-bill-wave"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modaleditorder"><i class="fas fa-info-circle"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan ini?')"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1493857619857</td>
                                    <td>Jalan Kramat Sentiong</td>
                                    <td>Rp 193.000</td>
                                    <td>In Shipping</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-secondary btn-sm disabled" data-toggle="modal"
                                                data-target="#modalpayorder"><i class="fas fa-money-bill-wave"></i></a>
                                            <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modaleditorder"><i class="fas fa-info-circle"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan ini?')"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- end tabel -->

    </div>
    <!-- end container -->

    <!-- footer -->
    <footer class="footer-black">
        <div class="footer-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!--Brand-->
                        <img src="../assets/image/brand.png" alt="" class="brand-image">
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="footer-heading">Quick Link</h4>
                            <ul class="footer-item">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="catalogue.html">Category</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!--Column1-->
                        <div class="footer-pad">
                            <h4 class="footer-heading">About Us</h4>
                            <ul class="footer-item">
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Address</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="footer-heading">Follow Us</h4>
                        <ul class="social-network social-circle footer-item">
                            <li><a href="https://www.instagram.com/lostrugapparel/">Instagram</i></a></li>
                            <li><a
                                    href="https://www.tokopedia.com/lostrugapparel?source=universe&st=product">Tokopedia</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center footer-copyright">&copy; Copyright 2018 - Company Name. All rights
                            reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- add Modal -->
    <div class="modal fade" id="modalpayorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Payment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center">Payment By OVO</h3>
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <img src="../assets/image/qrcode.png" class="img-fluid">
                        </div>
                    </div>
                    <br><br><br>
                    <form action="orders.html" method="post" class="user" enctype="multipart/form-data">
                        <!-- image -->
                        <div class="form-group">
                            <label>Upload Proof of Payment</label>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="file" name="file_upload" id="" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Add Payment</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end add modal -->

    <!-- edit Modal -->
    <div class="modal fade" id="modaleditorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Order</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url(); ?>/admin/sendupdatepesanan" method="post" class="user"
                        enctype="multipart/form-data">
                        <h3>Product</h3>
                        <!-- Foto barang -->
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="../assets/image/1604991081160.jpg" alt="">
                                <input name="product_last_image" type="text" class="form-control" value="" hidden>
                            </div>
                            <div class="col-8">
                                <!-- nama barang -->
                                <div class="form-group">
                                    <label>Product</label>
                                    <div class="input-group mb-3">
                                        <input name="product_name" type="text" class="form-control"
                                            value="'Lost Struggle' T-shirt (black)" required disabled>
                                    </div>
                                </div>
                                <!-- harga -->
                                <div class="form-group">
                                    <label>Price</label>
                                    <div class="input-group mb-3">
                                        <input name="product_price" type="text" class="form-control" value="Rp 189.000"
                                            required disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <!-- Size -->
                                        <div class="form-group">
                                            <label>Size</label>
                                            <div class="input-group mb-3">
                                                <input name="pesanan_size" type="text" class="form-control" value="XL"
                                                    required disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- Jumlah -->
                                        <div class="form-group">
                                            <label>Amount</label>
                                            <div class="input-group mb-3">
                                                <input name="pesanan_amount" type="text" class="form-control" value="1"
                                                    required disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Detail Pesanan -->
                        <br>
                        <h3>Order Detail</h3>
                        <!-- Pesanan Key -->
                        <div class="form-group">
                            <label>Order Code</label>
                            <div class="input-group mb-3">
                                <input name="pesanan_key" type="text" class="form-control" value="90983475908" required
                                    disabled>
                            </div>
                        </div>
                        <!-- Nomer Telepon -->
                        <div class="form-group">
                            <label>Phone</label>
                            <div class="input-group mb-3">
                                <input name="pesanan_numberphone" type="text" class="form-control" value="08234781264"
                                    required disabled>
                            </div>
                        </div>
                        <!-- Alamat Kirim -->
                        <div class="form-group">
                            <label>Address</label>
                            <div class="input-group mb-3">
                                <input name="pesanan_address" type="text" class="form-control"
                                    value="Jl Kramat Sentiong" required disabled>
                            </div>
                        </div>
                        <!-- Harga Ongkir -->
                        <div class="form-group">
                            <label>Shipping Price</label>
                            <div class="input-group mb-3">
                                <input name="pesanan_ongkir" type="text" class="form-control" value="Rp 10.000" required
                                    disabled>
                            </div>
                        </div>
                        <!-- Harga total -->
                        <div class="form-group">
                            <label>Total Price</label>
                            <div class="input-group mb-3">
                                <input name="pesanan_total_price" type="text" class="form-control" value="Rp 199.000"
                                    required disabled>
                            </div>
                        </div>
                        <!-- Status Pesanan -->
                        <br>
                        <h3>Status Pesanan</h3>
                        <!-- Status Pesanan -->
                        <div class="form-group">
                            <label>Order Status</label>
                            <select class="custom-select" name='pesanan_status' disabled>
                                <option class="box" disabled>-- Select Status --</option>
                                <option class="box" value="Waiting For Confirmation">Waiting For Confirmation</option>
                                <option class="box" value="Processed">Processed</option>
                                <option class="box" selected value="In Shipping">In Shipping</option>
                                <option class="box" value="Canceled">Canceled</option>
                            </select>
                        </div>
                        <!-- Metode Pembayaran -->
                        <div class="form-group">
                            <label>Payment Method</label>
                            <select class="custom-select" name='pesanan_payment_method' disabled>
                                <option class="box" disabled value="">-- Select Payment Method --</option>
                                <option class="box">Bank Transfer</option>
                                <option class="box" selected>OVO</option>
                                <option class="box">DANA</option>
                            </select>
                        </div>
                        <!-- Status Pembayaran -->
                        <div class="form-group">
                            <label>Payment Status</label>
                            <select class="custom-select" name='pesanan_payment' disabled>
                                <option class="box" disabled>-- Select Payment Status --</option>
                                <option class="box" selected value="Waiting">Waiting</option>
                                <option class="box" selected value="Paid">Paid</option>
                            </select>
                        </div>
                        <!-- Bukti Pembayaran -->
                        <div class="form-group">
                            <label>Payment Image</label><br>
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-sm-6 col-8">
                                    <img class="img-fluid" src="../assets/image/bukti.jpeg" alt="#">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Save Change</button>
                </div>
            </div>
        </div>
    </div>