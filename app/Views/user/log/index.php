<?= $this->extend('user/layout/main'); ?>

<?= $this->section('title'); ?>
<title>LOG ACTIVITY | LOSTRUG</title>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light menu">
    <div class="container">
        <div class="mx-auto order-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/catalogue">Catalogue</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- end menu -->

<!-- container -->
<div class="container">

    <!-- tabel -->
    <div class="row justify-content-center">
        <div class="col">
            <div class="card detail-card">
                <div class="card-body text-center">
                    <div class="row justify-content-center d-flex">
                        <h3>Log Activity</h3>
                    </div>
                    <div class="viewtable"></div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- end tabel -->

</div>
<!-- end container -->
<div class="viewmodal" style="display: none;"></div>

<script>
    function viewtable() {
        $.ajax({
            url: "<?= base_url('log/viewtable'); ?>",
            dataType: "json",
            success: function(response) {
                $('.viewtable').html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        })
    }

    $(document).ready(function() {
        // get table
        viewtable();
    });
</script>
<?= $this->endSection(); ?>