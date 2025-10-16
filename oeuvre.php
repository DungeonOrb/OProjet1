<?php
    require 'header.php';
    require 'bdd.php';
    $db = connexion();

    if(empty($_GET['id'])) {
        header('Location: index.php');
    }
    $oeuvres = $db->prepare('SELECT * FROM oeuvres WHERE ID = ?');
    $oeuvres->execute([$_GET['id']]);
    $oeuvre = $oeuvres->fetch();
    
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
