<?php $this->view('shared/header', 'Profile Page'); ?>

<link rel="stylesheet" href="/css/Profile/main.css">

<!-- This is the container to preview both address and profile side by side -->
<div id="personalInfoAddressContainer">

    <!-- Personal Info Content Container -->
    <div class="contentContainers contentContainerL">
        <h1>Personal Information</h1>

        <!-- This is the button to move to the Editable content file -->
        <form method="post" action="/Profile/editProfileInfo">
            <button type="submit"> edit </button>
        </form>

        <!-- This is the preview information content -->
        <div>
            <h2>First Name: </h2>
            <p><?= $data[0]->first_name ?></p>

            <h2>Middle Name:</h2>
            <p><?= $data[0]->middle_name ?></p>

            <h2>Last Name:</h2>
            <p><?= $data[0]->last_name ?></p>

            <h2>Email:</h2>
            <p><?= $data[0]->email ?></p>

            <h2>Phone Number:</h2>
            <p><?= $data[0]->phone_number ?></p>
        </div>

    </div>

    <?php print_r($data) ?>

    <!-- Address Info Content Container -->
    <?php for ($i=0; $i < count($data[1]); $i++) { 
        # code...
    } { ?>

        <div class="contentContainers contentContainerR">
            <h1>Address Information</h1>

            <!-- This is the button to move to the Editable content file -->
            <form method="post" action="/Profile/editAddressInfo">
                <button type="submit"> edit </button>
            </form>
            
            <!-- This is the preview information content per address-->
            <div>
                <h2>Street Address: </h2>
                <p><?=$data[0][$i]->street_address  ?></p>

                <h2>Postal Code:</h2>
                <p><?= $data[0][$i]->postal_code ?></p>

                <h2>City:</h2>
                <p><?= $data[0][$i]->city ?></p>

                <h2>Province:</h2>
                <p><?=$data[0][$i]->province ?></p>

                <h2>Country:</h2>
                <p><?= $data[0][$i]->country ?></p>
            </div>
        </div>
    <?php } ?>
</div>

<?php $this->view('shared/footer'); ?>
