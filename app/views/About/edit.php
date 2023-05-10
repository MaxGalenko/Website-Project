<?php $this->view('shared/header','About us'); ?>

<h1 class="text-center" id="about"><?= _('About Pathlor Tech') ?></h1>
<form name="submit-changes" action="" method="post">
	<div class="d-flex justify-content-center" id="about">
		<div id="aboutText">
			<textarea name="about_text" placeholder="Enter About Us Description" rows="20" cols="160"><?= $data->about_text ?></textarea>
		</div>
	</div>

	<div id="edit">
		<a href="/About/index"><i class="btn btn-secondary" style="margin-right: 5px; "><?=_('Back')?></i></a>
		<button class="btn btn-default" type="submit" name="action" style="background-color: #324A5F; color: #FFFFFF; "><?=_('Submit changes')?></button>
	</div>
</form>
<?php $this->view('shared/footer'); ?>