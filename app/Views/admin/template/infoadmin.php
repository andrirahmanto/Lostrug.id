<div class="row d-flex justify-content-center">
    <div class="col-md-4 col-12">
        <div class="card text-center pemberitahuan">
            <div class="card-body">
                <h4 class="card-title"><?= $user; ?></h4>
                <p class="card-text">Orders</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12">
        <div class="card text-center pemberitahuan">
            <div class="card-body">
                <h4 class="card-title"><?= $order; ?></h4>
                <p class="card-text">Users</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12">
        <div class="card text-center pemberitahuan">
            <div class="card-body">
                <h4 class="card-title"><?php echo "Rp " . number_format($income, 0, '', '.'); ?></h4>
                <p class="card-text">Income</p>
            </div>
        </div>
    </div>
</div>