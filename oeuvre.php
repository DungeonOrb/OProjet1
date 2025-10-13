<?php
    require 'header.php';
    require 'oeuvres.php';

    if(empty($_GET['id'])) {
        header('Location: index.php');
    }

    $oeuvre = null;
    foreach($oeuvres as $o) {
        if($o['id'] === intval($_GET['id'])) {
            $oeuvre = $o;
            break; 
        }
        else {
    $oeuvre = intval($_GET['id']);
    $oeuvre = $o;
        }
    }
?>

<article id="detail-oeuvre">
    <div id="img-oeuvre">
        <img src="<?= $oeuvre['image'] ?>" alt="<?= $oeuvre['titre'] ?>">
    </div>
    <div id="contenu-oeuvre">
        <h1><?= $oeuvre['titre'] ?></h1>
        <p class="description"><?= $oeuvre['artiste'] ?></p>
        <p class="description-complete">
             <?= $oeuvre['description'] ?>
        </p>
    </div>
</article>

<?php require 'footer.php'; ?>
