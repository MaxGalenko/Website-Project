<?php $this->view('shared/header', 'Profile Page'); ?>

<div>
    <form name='action' action="/Profile/editProfileInfo" method="post">
        <button type="submit" name="action">save</button> 
        
         <div>
            <h1>First Name: </h1>
            <input type="text" id="fname" name="first_name_edit" value="<?= $data->first_name ?>">

            <h1>Middle Name:</h1>
            <input type="text" id="fname" name="middle_name_edit" value="<?= $data->middle_name ?>">

            <h1>Last Name:</h1>
            <input type="text" id="fname" name="last_name_edit" value="<?= $data->last_name ?>">

            <h1>Email:</h1>
            <input type="text" id="fname" name="email_text_edit" value="<?= $data->email ?>">

            <h1>Phone Number:</h1>
            <input type="text" id="fname" name="phone_number_edit" value="<?= $data->phone_number ?>">
        </div>  
    </form>
   
</div>

<?php $this->view('shared/footer'); ?>