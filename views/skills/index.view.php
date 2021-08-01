<?php require 'views/partials/header.view.php' ?>
<div class="main content">
<div class="row">
<div class="col-12">
<h3>Skills van <?= $vars['user']->first_name . ' ' . $vars['user']->last_name ?></h3>
</div>
</div>

<?php foreach($vars['skills'] as $skill) : ?>
<div class="row">
<div class="col-12"><?= $skill->description ?></div>

</div>
<?php endforeach ?>
</div>
<?php require 'views/partials/footer.view.php' ?>