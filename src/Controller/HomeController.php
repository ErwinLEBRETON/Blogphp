<?php

namespace App\Controller;

use App\Repository\ArticleRepository;

class HomeController
{
    // Méthode pour afficher la page d'accueil

    public function main()
    {
        $aRepo = new ArticleRepository();
        $articles = $aRepo->getAllArticle();

        include "template/home.php";
    }
}