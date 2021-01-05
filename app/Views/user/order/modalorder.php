<div class="modal fade" id="modalorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
        <div class="modal-content modal-lg">
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
                            <form>
                                <div class="form-group row">
                                    <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="inputname" value="Andri Rahmanto">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="andrirahmanto@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="numberphone" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="numberphone" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" placeholder="Your Address">
                                    </div>
                                </div>
                            </form>
                            <a href="orders.html">
                                <button type="button" class="btn btn-buy text-white btn-order">Order</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end detail -->
        </div>
    </div>
</div>
<Script>
    $(document).ready(function() {
        $('.formdetailorder').submit(function(e) {
            e.preventDefault();
            let form = $('.formdetailorder')[0];
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
                        if (response.error.size) {
                            $('#size').addClass('is-invalid');
                            $('.errorsize').html(response.error.size);
                        } else {
                            $('#size').removeClass('is-invalid');
                            $('.errorsize').html('');
                        };
                        if (response.error.amount) {
                            $('#amount').addClass('is-invalid');
                            $('.erroramount').html(response.error.amount);
                        } else {
                            $('#amount').removeClass('is-invalid');
                            $('.erroramount').html('');
                        };
                    } else {

                    };

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</Script>