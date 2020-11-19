<?php $this->insert('partials/header'); ?>

<h1 class="float-right text-monospace">[Index page]</h1>

<!--<img src="assets/media/SwitchCat/switchcat-agency-card-medium.png">-->
<img src="<?=$this->e($assets['image']['sc_logo'])?>">

<div class="alert alert-info text-center" role="alert">
    <h2>Hello <?=$this->e(ucfirst($name['first']))?>,</h2>
    <p>
        You have successfully launched your new SwitchCat App. Follow these <a href="" >instructions</a> to adapt it to your needs.
    </p>
    <p><b>We wish you success!!!</b></p>
</div>

<?php $this->insert('partials/footer'); ?>