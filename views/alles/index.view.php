<?php require 'views/partials/header.view.php' ?>

<body>
<section>

    <h3>Opleidingen van <?= $vars['user']->first_name . ' ' . $vars['user']->last_name ?></h3>
<?php foreach($vars['educations'] as $education) : ?>
<div class="row">
<div class="col-12">
    <?= $education->title ?></div>
<div> 
    Instituut: <?= $education->institution ?> 
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

</section>

<section> 

    <h3>Werkhistorie van <?= $vars['user']->first_name?></h3>  
<?php foreach($vars['jobs'] as $job) : ?>
    <?= $job->description ?>
<div class="row">
    <b>Werkgever: <?= $job->company ?> </b>
    Startdatum: <?= $job->started_at ?> 
    Einddatum: <?= $job->stopped_at ?>
</div>    
<?php endforeach; ?>

</section>


<section>

    <h3>Hobbies van <?= $vars['user']->first_name ?> </h3>
<?php foreach($vars['hobbies'] as $hobbie) : ?>
<div class="row">
    <?= $hobbie->description ?>
</div>
<?php endforeach ?>
</div>

</section>

<section>

    <h3>Skills van <?= $vars['user']->first_name ?></h3>
<?php foreach($vars['skills'] as $skill) : ?>
<div class="row">
    <?= $skill->description ?>
<?php endforeach ?>
</div>

</section>

        
        
</body>
<?php require 'views/partials/footer.view.php' ?>