<?php require 'views/partials/header.view.php' ?>

<div class="main content">
    <div class="row">
        <div class="col-12">
            <h3>Opleidingen van <?= $vars['user']->first_name . ' ' . $vars['user']->last_name ?></h3>
        </div>
    </div>

    <?php foreach($vars['jobs'] as $job) : ?>
        <div class="row">
            <div class="col-12"><?= $job->description ?></div>
        <div> 
            Werkgever: <?= $job->company ?> 
        </div>
        <div> 
            Startdatum: <?= $job->started_at ?> 
        </div>
        <div>
            Einddatum: <?= $job->stopped_at ?>
        </div>
        

        
        <?php endforeach; ?>
        
        

<?php require 'views/partials/footer.view.php' ?>