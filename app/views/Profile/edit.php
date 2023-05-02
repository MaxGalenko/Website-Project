<?php $this->view('shared/header', 'Profile Page'); ?>

<link rel="stylesheet" href="/css/Profile/main.css">

<!-- This is the container to preview both address and profile side by side -->
<div class="contentContainerC">
    <form name='action' action="/Profile/editProfileInfo" method="post">
        
        <h1>Personal Information</h1>
        <button type="submit" name="action">save</button> 
         <div>
            <h1>First Name: </h1>
            <input type="text" name="first_name_edit" value="<?= $data->first_name ?>">

            <h1>Middle Name:</h1>
            <input type="text" name="middle_name_edit" value="<?= $data->middle_name ?>">

            <h1>Last Name:</h1>
            <input type="text" name="last_name_edit" value="<?= $data->last_name ?>">

            <h1>Email:</h1>
            <input type="text" name="email_text_edit" value="<?= $data->email ?>">

            <h1>Phone Number:</h1>
            <input type="text" name="phone_number_edit" value="<?= $data->phone_number ?>">
        </div>  
    </form> 
</div>

<?php $this->view('shared/footer'); ?>