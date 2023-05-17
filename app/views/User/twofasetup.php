<?php if($data[1]->secret_key == NULL) { ?>
    <img src="/User/makeQRCode?data=<?= $data[0] ?>" /> 
<?php } ?>

<form method="post" action="">  
    <label><?=_('Current code:')?><input type="password" name="currentCode"/></label>  
    <input type="submit" name="action" value="<?=_('Verify code')?>" /> 
</form>