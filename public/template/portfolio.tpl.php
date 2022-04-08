<?php include 'partials/_top.php'; ?>

<div class="container">
    <h1>Portfolio</h1>
<?php foreach ($myPF['project'] as $project) : ?>
    <h2><?= $project['projectName'] ?></h2>
    <p><?= $project['projectDescription'] ?></p>

    <img class="img-thumbnail" src="<?= $project['projectScreen'] ?>" alt="<?= $project['projectName'] ?>">

    <p>I realized this project with <?= $project['technologies'] ?>, <?= $project['framework'] ?></p>
    <p>(this project took me <?= $project['projectTime'] ?> and was finished in <?= $project['creationDate'] ?>)</p>
    <?php if (isset($project['projectLink'])) {
    ?><a href="<?= $project['projectLink']; ?>" target="_blank">check this out, now!</a>
    <?php
    } else {
        echo $project['projectEmpty'];
    }
    ?>
<?php endforeach; ?>
</div>

<?php include 'partials/_bottom.php'; ?>