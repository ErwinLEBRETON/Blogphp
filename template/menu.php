<header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>

            <?php
            if (isset($_SESSION["role"]) && !is_null($_SESSION["role"])) { ?>
                <li><a href="?page=login&action=deconnexion">Déconnexion</a></li>
            <?php } else { ?>
                <li><a href="?page=login">Connexion/Inscription</a></li>
            <?php } ?>
        </ul>
    </nav>
</header>