<?php 

namespace App\Repository;

use PDO;
use PDOException;
use App\Entity\Personne;

class PersonneRepository extends ManagerRepository
{
    public function pLogin(Personne $p)
    {
        $sql = "SELECT * FROM personne WHERE identifiant=:username OR email=:email LIMIT 1";
        $username = $p->getUsername();
        $email = $p->getEmail();

        try {
            $co = $this->dbConnexion();

            $stmt = $co->prepare($sql);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":email", $email);
            $stmt->execute();

            $data = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($stmt->rowCount() > 0) {
                if (password_verify($p->getPassword(), $data["mdp"])) {
                    $_SESSION["role"] = intval($data["role"]);
                    $_SESSION["username"] = $data["identifiant"];
                } else {
                    echo "MDP pas bon";
                }
            } else {
                    echo "Autre truc pas bon";
            }

            $co = $this->dbDeconnexion($co);
        } catch (PDOException $e) {
            echo $e;
        }

        return $data;
    }

    public function pLogout()
    {
        session_destroy();
        unset($_SESSION["role"]);
        unset($_SESSION["username"]);
    }
}