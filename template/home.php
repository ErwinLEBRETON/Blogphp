<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/build/app.css">
    <title>Bienvenue sur mon blog</title>
</head>

<body>
    <?php include "menu.php"; ?>

    <h1>Bienvenue sur la page d'accueil</h1>
    <?php foreach ($articles as $article) { ?>
        <article>
            <h2><?= $article->getTitle() ?></h2>
            <p><?= $article->getContent() ?></p>
            <p><?= $article->getImg() ?></p>
            <a href="?page=article&id=<?= $article->getIdArticle(); ?>">Lire plus</a>
        </article>
    <?php } ?>

</body>

</html>