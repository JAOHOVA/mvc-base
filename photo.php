<?php
require_once('modeles/Photos.php');
$photos = new Photos();
$photo = null;
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $photo = $photos->afficherPhoto($_GET['id']);
}
require_once('vues/affiche-photo.php');