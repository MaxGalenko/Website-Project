<?php $this->view('shared/header', 'Profile Page'); ?>

<link rel="stylesheet" href="../../../css/Profile/main.css">

<!-- This is the container to preview both address and profile side by side -->
<div id="personalInfoAddressContainer">

    <!-- Personal Info Content Container -->
    <div class="contentContainers">
        <h1>Personal Information</h1>

        <!-- This is the button to move to the Editable content file -->
        <form method="post" action="/Profile/editProfileInfo">
            <button type="submit"> edit </button>
        </form>

        <!-- This is the preview information content -->
        <div>
            
            <h2>First Name: </h2>
            <p><?php echo $data->first_name ?></p>

            <h2>Middle Name:</h2>
            <p><?php echo $data->middle_name ?></p>

            <h2>Last Name:</h2>
            <p><?php echo $data->last_name ?></p>

            <h2>Email:</h2>
            <p><?php echo $data->email ?></p>

            <h2>Phone Number:</h2>
            <p><?php echo $data->phone_number ?></p>
        </div>
    </div>
    
    <!-- Address Info Content Container -->
    <div class="contentContainers">
        <h1>Address Information</h1>

        <!-- This is the button to move to the Editable content file -->
        <form method="post" action="/Profile/editProfileInfo">
            <button type="submit"> edit </button>
        </form>

        <!-- This is the preview information content -->
        <div>
            
            <h2>First Name: </h2>
            <p><?php echo $data->first_name ?></p>

            <h2>Middle Name:</h2>
            <p><?php echo $data->middle_name ?></p>

            <h2>Last Name:</h2>
            <p><?php echo $data->last_name ?></p>

            <h2>Email:</h2>
            <p><?php echo $data->email ?></p>

            <h2>Phone Number:</h2>
            <p><?php echo $data->phone_number ?></p>
        </div>
    </div>
</div>

<?php $this->view('shared/footer'); ?>
