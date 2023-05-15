<?php $this->view('shared/header', "<?_('Contact Us')?>"); ?>

<section class="mb-4">
    <h2 class="h1-responsive font-weight-bold text-center my-3"><?=_('Contact us')?></h2>
    <h3 class="text-center my-3"><?= $data->contact_text ?>
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
            <a href='/Contact/edit'><i class='btn btn-default' style='background-color: #324A5F; color: #FFFFFF; '><?=_('Edit')?></i></a>
        <?php } ?>
    </h3>
        
    <p class="text-center w-responsive mx-auto mb-5"><?=_('Do you have any questions? Please do not hesitate to contact us directly. We will be sure to respond as soon as possible.')?></p>

	<div class="d-flex justify-content-center">
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        	<label for="name" class=""><?=_('Name')?></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="<?=_('Write your name here')?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        	<label for="email" class=""><?=_('Email')?></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="<?=_('Example@gmail.com')?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                        	<label for="subject" class=""><?=_('Subject')?></label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="<?=_('Subject')?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="md-form">
                        	<label for="message"><?=_('Message')?></label>
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="<?=_('Write your message here')?>"></textarea>
                        </div>

                    </div>
                </div>
                <div class="text-center text-md-left">
	                <button class="btn btn-default mt-2" type="submit" name="send" style="background-color: #324A5F; color: #FFFFFF; "><?=_('Send')?></button>
	            </div>
            </form>
        </div>
    </div>
</section>

<?php $this->view('shared/footer'); ?>