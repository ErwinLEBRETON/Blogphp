<?php

namespace App\Repository;

use App\Entity\Commentary;
use PDO;
use PDOException;

class CommentaryRepository extends ManagerRepository
{
    public function getAllCommentaryByArticle($idArticle)
    {
        $objects = [];

        try {
            $co = $this->dbConnexion();

            $sql = "SELECT * FROM commentaire WHERE id_article=:id";

            $stmt = $co->prepare($sql);
            $stmt->bindParam(":id", $idArticle);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $objects[] = new Commentary($row);
            }

            $this->dbDeconnexion($co);
        } catch (PDOException $e) {
            echo $e;
        }

        return $objects;
    }
}