<?php $this->view('shared/header', 'Create an Account'); ?>

<div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
    <div class="card" style="width: 30rem;">
        

        <div class="card-body text-center">
            <h1 class="mb-4" style="color: #324A5F;"><i class="fas fa-user"></i> Register Profile</h1> 

            <form method="post" action="">
                <div class="form-group mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="first_name" placeholder="First Name" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>

                <div class="form-group mb-4">
                    <div class="input-group">   
                        <input type="text" class="form-control" id="password" name="middle_name" placeholder="Middle Name" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>  

                <div class="form-group mb-4">
                    <div class="input-group">   
                        <input type="text" class="form-control" id="password" name="last_name" placeholder="Last Name" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>  

                <div class="form-group mb-4">
                    <div class="input-group">   
                        <input type="text" class="form-control" id="password" name="email" placeholder="Email" style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>  

                <div class="form-group mb-4">
                    <div class="input-group">   
                        <input type="text" class="form-control" id="password" name="phone_number" placeholder="Phone Number " style="background-color: #F2F2F2; color: #324A5F;">
                    </div>
                </div>  

                <button type="submit" class="btn btn-primary btn-block mb-3" name="action" value='Register' style="background-color: #324A5F;">Sign up</button>
                <div style="color: #324A5F;">Already have an account? <a href="/User/index" style="color: #324A5F; text-decoration: underline;">Login.</a></div>
            </form>
        </div>
    </div>
</div>

<?php $this->view('shared/footer'); ?>