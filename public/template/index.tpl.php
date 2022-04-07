<?php include 'partials/_top.php'; ?>

<div class="container">

    <img src="<?= $myCV['imageProfile'] ?>" alt="profil picture of M. <?= getName() ?>" /></span>
    <h1><?= getName() ?></h1>
    <p><?= $myCV['readme'] ?></p>
    <h2 class="text-center">Experiences</h2>

    <?php foreach ($myCV['professionnal'] as $professionnal) : ?>
        <h3><?= $professionnal['job'] ?> - <?= $professionnal['society'] ?> (<?= $professionnal['place'] ?>)</h3>
        <p>from <?= $professionnal['dateFrom'] ?> to <?= $professionnal['dateEnd'] ?></p>
        <?= $professionnal['description'] ?>
    <?php endforeach; ?>

    <h2 class="text-center">Educations</h2>
    <?php foreach ($myCV['schools'] as $schools) : ?>
        <h3><?= $schools['learned'] ?> - <?= $schools['school'] ?> (<?= $schools['place'] ?>)</h3>
        <p>from <?= $schools['dateFrom'] ?> to <?= $schools['dateEnd'] ?></p>
        <?= $schools['description'] ?>
    <?php endforeach; ?>
</div>
    <?php include 'partials/_bottom.php'; ?>