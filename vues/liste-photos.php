<?php
$titre = 'Mon book';
ob_start();
?>
    <article>
        <?php foreach ($photos as $photo): ?>
            <a href="photo.php?id=<?= $photo->id ?>">
                <img src="photos/<?= $photo->fichier ?>" width="250" />
            </a>
            <h2><?= $photo->titre ?></h2>
        <?php endforeach; ?>
    </article>
<?php
$contenu = ob_get_clean();
require_once('layout.php');