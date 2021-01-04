<div class="modal fade" id="modalpay" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Payment Order #<?= $order['order_key']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- , 'enctype' => 'multipart/form-data' -->
            <?= form_open_multipart('myorder/uploadimagepay', ['class' => 'formpay']); ?>
            <?= csrf_field(); ?>
            <!-- id -->
            <input type="hidden" value="<?= $order['order_id']; ?>" name="id">
            <div class="modal-body">
                <h4 class="text-center">Total : <?php echo "Rp " . number_format($order['order_total_price'], 0, '', '.'); ?></h4>
                <br>
                <h4 class="text-center">Transfer Bank</h4>
                <div class="row justify-content-center">
                    <div class="col-8">
                        <img src="<?= base_url(); ?>/assets/image/qrcode/bca.jpeg" class="img-fluid">
                    </div>
                </div>
                <h5 class="text-center">OR</h5>
                <h5 class="text-center">Transfer To</h5>
                <h5 class="text-center">(BCA) 5271677686 A/N Hendi Nur Ibrahim</h5>
                <br>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h5 class="text-center">Upload Proof of Payment</h5>
                    </div>
                    <div class="col-12">
                        <!-- image -->
                        <div class="form-group">
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="file" id="image" name="image" accept="image/*" class="is-invalid" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<Script>
    $(document).ready(function() {
        $('.formpay').submit(function(e) {
            e.preventDefault();
            let form = $('.formpay')[0];
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
                    $('.btn-submit').attr('disabled', 'disabled');
                    $('.btn-submit').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btn-submit').removeAttr('disabled');
                    $('.btn-submit').html('Add Product');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.image) {
                            $('#image').addClass('is-invalid');
                            $('.errorimage').html(response.error.image);
                        } else {
                            $('#image').removeClass('is-invalid');
                            $('.errorimage').html('');
                        };
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: response.success
                        })

                        $('#modalpay').modal('hide');
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