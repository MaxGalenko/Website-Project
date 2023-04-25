<?php $this->view('shared/header','About us'); ?>

<h1 class="text-center" id="about"><?= _('About Pathlor Tech') ?></h1>

<div class="d-flex justify-content-center" id="about">
	<div id="aboutText">
		<p><?= $data->text ?></p>
	</div>
</div>

<div id="edit">
	<a href="/About/edit"><i class="btn btn-primary">Edit</i></a>
</div>

<?php $this->view('shared/footer'); ?>