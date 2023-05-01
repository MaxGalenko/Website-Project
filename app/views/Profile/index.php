<?php $this->view('shared/header', 'Profile Page'); ?>

<link rel="stylesheet" href="css/Profile/main.css">

<!-- This is the container to preview both address and profile side by side -->
<div id="personalInfoAddressContainer">

    <!-- Personal Info Content Container -->
    <div class="ContentContainers">
        <!-- This is the button to move to the Editable content file -->
        <form method="post" action="/Profile/editProfileInfo">
            <button type="submit"> edit </button>
        </form>

        <!-- This is the preview information content -->
        <div>
            <h1>First Name: </h1>
            <p><?php echo $data->first_name ?></p>

            <h1>Middle Name:</h1>
            <p><?php echo $data->middle_name ?></p>

            <h1>Last Name:</h1>
            <p><?php echo $data->last_name ?></p>

            <h1>Email:</h1>
            <p><?php echo $data->email ?></p>

            <h1>Phone Number:</h1>
            <p><?php echo $data->phone_number ?></p>
        </div>
    </div>
    
    <!-- Address Info Content Container -->

</div>

<?php $this->view('shared/footer'); ?>
