<?php $this->view('shared/header', "<?_('Register')?>"); ?>

<div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
    <div class="card" style="width: 30rem;">
        <div class="card-body text-center">
            <h1 class="mb-4" style="color: #324A5F;"><i class="fas fa-user"></i> Register</h1>
            <form method="post" action="">
                <div class="form-group mb-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person"></i></i></div>
                        </div>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-lock"></i></div>
                        </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mb-3" name="action" value='Register' style="background-color: #324A5F;">Next</button>
                <div style="color: #324A5F;">Already have an account? <a href="/User/index" style="color: #324A5F; text-decoration: underline;">Login.</a></div>
            </form>

            <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?= $_GET['error'] ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $this->view('shared/footer'); ?>