<?php $this->view('shared/header', "<?_('About Us')?>"); ?>

<h1 class='text-center' id='about'><?= _('About Pathlor Tech') ?></h1>

<div class='d-flex justify-content-center' id='about'>
	<div id='aboutText'>
		<p><?= $data->about_text ?></p>
	</div>
</div>

<div id='edit'>
	<?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
		<a href='/About/edit' class='btn btn-default' style='background-color: #324A5F; color: #FFFFFF; '><?=_('Edit')?></a>
	<?php } ?>
</div>

<?php $this->view('shared/footer'); ?>