<?php $this->view('shared/header', "<?_('Create An Account')?>"); ?>

<div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
    <div class="card" style="width: 30rem;">

        <div class="card-body text-center">
            <h1 class="mb-4" style="color: #324A5F;"><i class="fas fa-user"></i> Register Address</h1> 

            <form method="post" action="/Profile/registerAddress">
                <div class="form-group mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="street_address" placeholder="Street Address" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>

                <div class="form-group mb-4">
                    <div class="input-group">   
                        <input type="text" class="form-control" id="password" name="postal_code" placeholder="Postal Code" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>  

                <div class="form-group mb-4">
                    <div class="input-group">   
                        <input type="text" class="form-control" id="password" name="city" placeholder="City" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>  

                <div class="form-group mb-4">
                    <div class="input-group">   
                        <input type="text" class="form-control" id="password" name="province" placeholder="Province" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>  

                <div class="form-group mb-4">
                    <div class="input-group">   
                        <input type="text" class="form-control" id="password" name="country" placeholder="Country" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>  

                <button type="submit" class="btn btn-primary btn-block mb-3" name="action" style="background-color: #324A5F;">Register</button>
                <div style="color: #324A5F;">Already have an account? <a href="/User/index" style="color: #324A5F; text-decoration: underline;">Login.</a></div>
            </form>
        </div>
    </div>
</div>

<?php $this->view('shared/footer'); ?>