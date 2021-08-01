<?php require 'views/partials/header.view.php' ?>

<div class="main content">
    <div class="row">
        <div class="col-12">
            <h3>Opleidingen van <?= $vars['user']->first_name . ' ' . $vars['user']->last_name ?></h3>
        </div>
    </div>

    <?php foreach($vars['educations'] as $education) : ?>
        <div class="row">
            <div class="col-12"><?= $education->title ?></div>
        <div> 
            Instituut: <?= $education->institution ?> 
        </div>
        <div> 
            Startdatum: <?= $education->started_at ?> 
        </div>
        <div>
            Einddatum: <?= $education->finished_at ?>
        </div>
        <div>
            Diploma Behaald: <?= $education->is_completed ?>
        </div>
        <?php endforeach; ?>
        
        

<?php require 'views/partials/footer.view.php' ?>