<?php $this->view('shared/header', _('Contact Us')); ?>

<section class="mb-4">
    <h2 class="h1-responsive font-weight-bold text-center my-3"><?=_('Contact us')?></h2>
    <form name="submit-changes" action="" method="post">
        <div class="d-flex justify-content-center" id="about">
            <div id="aboutText">
                <textarea name="contact_text" rows="10" cols="80"><?= $data->contact_text ?></textarea>
            </div>
        </div>

        <div id="edit">
            <a href="/Contact/index"><i class="btn btn-secondary" style="margin-right: 5px; " ><?=_('Back')?></i></a>
            <button class="btn btn-default  mt-2" type="submit" name="action" style="background-color: #324A5F; color: #FFFFFF; "><?=_('Submit changes')?></button>
        </div>
    </form>
</section>

<?php $this->view('shared/footer'); ?>