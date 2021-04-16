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

    <?=
        password_hash("admin", PASSWORD_DEFAULT);
    ?>

    <h1>Connexion</h1>

    <form action="?page=login&action=connexion" method="post">
        <div>
            <label for="identifiant">Identifiant</label>
            <input type="text" name="coIdentifiant" id="identifiant">
        </div>
        <div>
            <label for="mdp">Mot de passe</label>
            <input type="password" name="coMdp" id="mdp">
        </div>
        <div>
            <input type="submit" name="coBtnSubmit" id="Connexion">
        </div>
    </form>
</body>

</html>