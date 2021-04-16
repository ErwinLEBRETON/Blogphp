<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CommentaryRepository;

class ArticleController
{
    // Méthode pour afficher un article

    public function main($idArticle)
    {
        $aRepo = new ArticleRepository();
        $article = $aRepo->getOneArticle($idArticle);

        $cRepo = new CommentaryRepository();
        $comments = $cRepo->getAllCommentaryByArticle($article->getIdArticle());

        include "template/article.php";
    }
}