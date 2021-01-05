<!-- detail -->
<div class="row justify-content-center">
    <div class="col-12">
        <div class="card detail-card">
            <div class="card-body">
                <h4 class="title-form-order">Your Order</h4>
                <table class="table tabledetail">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col" class="text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $product['product_name']; ?> <?= $product['product_info']; ?> (<?= $order_size; ?>)</td>
                            <td class="text-right"><?php echo "Rp " . number_format($product['product_price'], 0, '', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Subtotal X<?= $order_amount; ?></td>
                            <td class="text-right"><?php echo "Rp " . number_format($order_subtotal, 0, '', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Sipping</td>
                            <td class="text-right"><?php echo "Rp " . number_format($order_ongkir, 0, '', '.'); ?></td>
                        </tr>
                        <tr>
                            <th>Total</th>
                            <th class="text-right"><?php echo "Rp " . number_format($order_total_price, 0, '', '.'); ?></th>
                        </tr>
                    </tbody>
                </table>
                <?= form_open_multipart('/order/createOrder', ['class' => 'formcreateorder']); ?>
                <?= csrf_field(); ?>
                <!-- user_id -->
                <input type="hidden" value="<?= $user['user_id']; ?>" name="user_id">
                <!-- product_id -->
                <input type="hidden" value="<?= $product['product_id']; ?>" name="product_id">
                <!-- order_size -->
                <input type="hidden" value="<?= $order_size; ?>" name="order_size">
                <!-- order_amount -->
                <input type="hidden" value="<?= $order_amount; ?>" name="order_amount">
                <!-- order_ongkir -->
                <input type="hidden" value="<?= $order_ongkir; ?>" name="order_ongkir">
                <!-- order_total_price -->
                <input type="hidden" value="<?= $order_total_price; ?>" name="order_total_price">
                <!-- name -->
                <div class="form-group row">
                    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="inputname" value="<?= $user['user_name']; ?>">
                    </div>
                </div>
                <!-- email -->
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user['user_email']; ?>">
                    </div>
                </div>
                <!-- numberphone -->
                <div class="form-group row">
                    <label for="numberphone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="numberphone" name="numberphone" placeholder="Your Phone">
                        <div class="invalid-feedback errornumberphone"></div>
                    </div>
                </div>
                <!-- address -->
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Your Address">
                        <div class="invalid-feedback erroraddress"></div>
                    </div>
                </div>
                <a href="orders.html">
                    <button type="submit" class="btn btn-buy text-white btn-order">Order</button>
                </a>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
<!-- end detail -->
<Script>
    $(document).ready(function() {
        $('.formcreateorder').submit(function(e) {
            e.preventDefault();
            let form = $('.formcreateorder')[0];
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
                    $('.btn-buy').attr('disabled', 'disabled');
                    $('.btn-buy').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btn-buy').removeAttr('disabled');
                    $('.btn-buy').html('Buy');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.numberphone) {
                            $('#numberphone').addClass('is-invalid');
                            $('.errornumberphone').html(response.error.numberphone);
                        } else {
                            $('#numberphone').removeClass('is-invalid');
                            $('.errornumberphone').html('');
                        };
                        if (response.error.address) {
                            $('#address').addClass('is-invalid');
                            $('.erroraddress').html(response.error.address);
                        } else {
                            $('#address').removeClass('is-invalid');
                            $('.erroraddress').html('');
                        };
                    }
                    if (response.success) {
                        window.location = response.success.link;
                    }

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</Script>