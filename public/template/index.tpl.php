<?php include 'partials/_top.php'; ?>

<div class="container">
<h1 class="text-center">Curriculum Vitae</h1>
<div class="row">
    <div class="col-3">
    <img class="profil-picture" src="<?= $myCV['imageProfile'] ?>" alt="profil picture of M. <?= getName() ?>" /></span>
    </div>
    <div class="col-9">
    <h2><?= getName() ?></h2>
    <p><?= $myCV['readme'] ?></p>
</div>
</div>
<div class="text-center">
    <h3 class="text-center">Experiences</h3>
    <?php foreach ($myCV['professionnal'] as $professionnal) : ?>
        <h4><?= $professionnal['job'] ?> - <?= $professionnal['society'] ?> (<?= $professionnal['place'] ?>)</h4>
        <p>from <?= $professionnal['dateFrom'] ?> to <?= $professionnal['dateEnd'] ?></p>
        <p><?= $professionnal['description'] ?></p>
    <?php endforeach; ?>

    <h3 class="text-center">Educations</h3>
    <?php foreach ($myCV['schools'] as $schools) : ?>
        <h4><?= $schools['learned'] ?> - <?= $schools['school'] ?> (<?= $schools['place'] ?>)</h4>
        <p>from <?= $schools['dateFrom'] ?> to <?= $schools['dateEnd'] ?> <strong><?= $schools['mention'] ?></strong></p>
        <p><?= $schools['description'] ?></p>
    <?php endforeach; ?>
</div>
</div>
<br>
<?php include 'partials/_bottom.php'; ?>