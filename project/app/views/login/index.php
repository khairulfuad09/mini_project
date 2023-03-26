<div class="container">
    <div class="card position-absolute top-50 start-50 translate-middle">
    <div class="row">
        <div class="col-lg-6" style="width: 18rem;">
        <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="card-body"  style="width: 18rem;">
            <form action="<?= BASEURL; ?>/login/loginUser" method="post">
                <div class="input-group flex-nowrap mb-2">
                <span class="input-group-text" id="addon-wrapping">Username</span>
                <input type="text" class="form-control" placeholder="NIK" aria-label="Username" aria-describedby="addon-wrapping" name="nik">
                </div>
                <div class="input-group flex-nowrap mb-2">
                <span class="input-group-text" id="addon-wrapping">Password</span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping" name="password">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Login</button>
                <a href="<?= BASEURL; ?>/login/daftar" class="card-link float-end">Daftar</a>
            </form>
        </div>
    </div>
</div>