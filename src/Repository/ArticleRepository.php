<?php

namespace App\Repository;

use App\Entity\Article;
use PDO;
use PDOException;

class ArticleRepository extends ManagerRepository
{
    public function getAllArticle()
    {
        $objects = [];

        try {
            $co = $this->dbConnexion();

            $sql = "SELECT * FROM article ORDER BY id_article DESC";

            $stmt = $co->prepare($sql);
            $stmt->execute();

            while($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $objects[] = new Article($data);
            }

            $this->dbDeconnexion($co);
        } catch (PDOException $e) {
            echo $e;
        }

        return $objects;
    }

    public function getOneArticle($idArticle)
    {
        try {
            $co = $this->dbConnexion();

            $sql = "SELECT * FROM article WHERE id_article=:id";

            $stmt = $co->prepare($sql);
            $stmt->bindParam(":id", $idArticle);
            $stmt->execute();

            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            $this->dbDeconnexion($co);
        } catch (PDOException $e) {
            echo $e;
        }

        return new Article($data);
    }
}