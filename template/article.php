<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <h1><?= $article->getTitle() ?></h1>

    <div>
        <span>Par <?= $article->getAuthor() ?></span> -
        <span>Crée le <?= $article->getCreateDate() ?></span> -
        <span>Dernière modification le <?= $article->getUpdateDate() ?></span>
    </div>

    <p><?= $article->getContent() ?></p>

    <hr>

    <section>
        <h2>Commentaires</h2>
        <?php foreach ($comments as $comment) { ?>
            <div style="margin-top :24px;">
                <strong><?= $comment->getAuthor() ?></strong> - <span><?= $comment->getDate() ?></span>
                <p><?= $comment->getContent() ?></p>
            </div>
        <?php } ?>
    </section>
</body>

</html>