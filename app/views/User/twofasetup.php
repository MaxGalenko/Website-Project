<?php $this->view('shared/header', 'Create product'); ?>
<img src="/User/makeQRCode?data=<?= $data ?>" /> 
    <form method="post" action="">  
        <label>Current code:<input type="text" name="currentCode" /></label>  
        <input type="submit" name="action" value="Verify code" /> 
    </form>
<?php $this->view('shared/footer'); ?>