<div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('admin/order/updateOrder', ['class' => 'formeditorder']); ?>
            <?= csrf_field(); ?>
            <!-- , 'enctype' => 'multipart/form-data' -->
            <div class="modal-body">
                <!-- id -->
                <input type="hidden" value="<?= $order['order_id']; ?>" name="id">
                <h3>Buyer</h3>
                <!-- nama user -->
                <div class="form-group">
                    <label>Name</label>
                    <div class="input-group mb-3">
                        <input name="user_name" type="text" class="form-control" value="<?= $order['order_user']['user_name']; ?>" required disabled>
                    </div>
                </div>
                <!-- email user -->
                <div class="form-group">
                    <label>Email</label>
                    <div class="input-group mb-3">
                        <input name="user_email" type="text" class="form-control" value="<?= $order['order_user']['user_email']; ?>" required disabled>
                    </div>
                </div>
                <br>
                <h3>Product</h3>
                <!-- Foto barang -->
                <div class="row">
                    <div class="col-md-4 col-12">
                        <img class="img-fluid" src="<?= base_url(); ?>/assets/image/<?= $order['order_product']['product_image']; ?>" alt="">
                        <input name="product_last_image" type="text" class="form-control" value="" hidden>
                    </div>
                    <div class="col-md-8 col-12">
                        <!-- nama barang -->
                        <div class="form-group">
                            <label>Product</label>
                            <div class="input-group mb-3">
                                <input name="product_name" type="text" class="form-control" value="<?= $order['order_product']['product_name']; ?> <?= $order['order_product']['product_info']; ?>" required disabled>
                            </div>
                        </div>
                        <!-- harga -->
                        <div class="form-group">
                            <label>Price</label>
                            <div class="input-group mb-3">
                                <input name="product_price" type="text" class="form-control" value="<?= $order['order_product']['product_price']; ?>" required disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <!-- Size -->
                                <div class="form-group">
                                    <label>Size</label>
                                    <div class="input-group mb-3">
                                        <input name="pesanan_size" type="text" class="form-control" value="<?= $order['order_size']; ?>" required disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- Jumlah -->
                                <div class="form-group">
                                    <label>Amount</label>
                                    <div class="input-group mb-3">
                                        <input name="pesanan_amount" type="text" class="form-control" value="<?= $order['order_amount']; ?>" required disabled>
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
                        <input name="pesanan_key" type="text" class="form-control" value="<?= $order['order_key']; ?>" required disabled>
                    </div>
                </div>
                <!-- Nomer Telepon -->
                <div class="form-group">
                    <label>Phone</label>
                    <div class="input-group mb-3">
                        <input name="pesanan_numberphone" type="text" class="form-control" value="<?= $order['order_numberphone']; ?>" required disabled>
                    </div>
                </div>
                <!-- Alamat Kirim -->
                <div class="form-group">
                    <label>Address</label>
                    <div class="input-group mb-3">
                        <input name="pesanan_address" type="text" class="form-control" value="<?= $order['order_address']; ?>" required disabled>
                    </div>
                </div>
                <!-- Harga Ongkir -->
                <div class="form-group">
                    <label>Shipping Price</label>
                    <div class="input-group mb-3">
                        <input name="pesanan_ongkir" type="text" class="form-control" value="<?= $order['order_ongkir']; ?>" required disabled>
                    </div>
                </div>
                <!-- Harga total -->
                <div class="form-group">
                    <label>Total Price</label>
                    <div class="input-group mb-3">
                        <input name="pesanan_total_price" type="text" class="form-control" value="<?= $order['order_total_price']; ?>" required disabled>
                    </div>
                </div>
                <!-- Status Pesanan -->
                <br>
                <h3>Status Pesanan</h3>
                <!-- Status Pesanan -->
                <div class="form-group">
                    <label>Status Pesanan</label>
                    <select class="custom-select" name='status_id'>
                        <option class="box" disabled>-- Pilih Status --</option>
                        <?php foreach ($statusorder as $status) : ?>
                            <?php if ($status['status_id'] == $order['status_id']) : ?>
                                <option class="box" selected value="<?php echo $status['status_id'] ?>"><?php echo $status['status_keterangan'] ?></option>
                            <?php else : ?>
                                <option class="box" value="<?php echo $status['status_id'] ?>"><?php echo $status['status_keterangan'] ?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <!-- Metode Pembayaran -->
                <?php $metodes = ['Transfer Bank', 'OVO', 'DANA'] ?>
                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <select class="custom-select" name='order_payment_method'>
                        <?php if (!isset($order['order_payment_method'])) : ?>
                            <option class="box" selected disabled>-- Pilih Metode Pembayaran --</option>
                        <?php else : ?>
                            <option class="box" disabled>-- Pilih Metode Pembayaran --</option>
                        <?php endif ?>
                        <?php foreach ($metodes as $metode) : ?>
                            <?php if ($metode == $order['order_payment_method']) : ?>
                                <option class="box" selected value="<?php echo $metode ?>"><?php echo $metode ?></option>
                            <?php else : ?>
                                <option class="box" value="<?php echo $metode ?>"><?php echo $metode ?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <!-- Status Pembayaran -->
                <?php
                $payments = ['unpaid', 'paid']
                ?>
                <div class="form-group">
                    <label>Status Pembayaran</label>
                    <select class="custom-select" name='order_payment'>
                        <option class="box" disabled>-- Pilih Metode Pembayaran --</option>
                        <?php foreach ($payments as $payment) : ?>
                            <?php $index = array_search($payment, $payments); ?>
                            <?php if ($index == $order['order_payment']) : ?>
                                <option class="box" selected value="<?php echo $index ?>"><?php echo $payment ?></option>
                            <?php else : ?>
                                <option class="box" value="<?php echo $index ?>"><?php echo $payment ?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <!-- Bukti Pembayaran -->
                <?php if (isset($order['order_payment_image'])) : ?>
                    <div class="form-group">
                        <label>Status Pembayaran</label><br>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-sm-6 col-8">
                                <img class="img-fluid" src="<?php echo base_url('/assets/image/payment/' . $order['order_payment_image']) ?>" alt="#">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-editorder">Save Change</button>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<Script>
    $(document).ready(function() {
        $('.formeditorder').submit(function(e) {
            e.preventDefault();
            let form = $('.formeditorder')[0];
            let data = new FormData(form);
            $.ajax({
                type: "post",
                url: $(this).attr("action"),
                data: data,
                enctype: 'multipart/form-data',
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                beforeSend: function() {
                    $('.btn-editorder').attr('disabled', 'disabled');
                    $('.btn-editorder').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btn-editorder').removeAttr('disabled');
                    $('.btn-editorder').html('Edit Product');
                },
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: response.success
                        })

                        $('#modaledit').modal('hide');
                        viewtable();
                    };

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</Script>