<?php $this->view('shared/header', 'Profile Page'); ?>

<div>
    <form name='action' action="/Profile/editProfileInfo" method="post">
        <button type="submit" name="action">save</button> 
        
         <div>
            <h1>First Name: </h1>
            <p contentEditable="true" name='first_name_edit'></p>

            <h1>Middle Name:</h1>
            <p contentEditable="true" name='middle_name_edit'></p>

            <h1>Last Name:</h1>
            <p contentEditable="true" name='last_name_edit'></p>

            <h1>Email:</h1>
            <p contentEditable="true" name='email_text_edit'></p>

            <h1>Phone Number:</h1>
            <p contentEditable="true" name='phone_number_edit'></p>
        </div>  
    </form>
   
</div>

<?php $this->view('shared/footer'); ?>