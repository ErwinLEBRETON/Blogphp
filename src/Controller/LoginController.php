<?php 

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;

class LoginController
{
    public function main()
    {
        include "template/connexion.php";
    }

    public function connexion()
    {
        if (isset($_POST["coBtnSubmit"]) && !is_null($_POST["coBtnSubmit"])) {
            $p = new Personne();
            $p->setUsername($_POST["coIdentifiant"]);
            $p->setEmail($_POST["coIdentifiant"]);
            $p->setPassword($_POST["coMdp"]);

            $pRepo = new PersonneRepository();
            $pRepo->pLogin($p);

            if (isset($_SESSION["role"]) && !is_null($_SESSION["role"])) {
                if ($_SESSION["role"] === 1 || $_SESSION["role"] === 2) {
                    // TODO : rediriger vers l'admin
                    header('Location: ?page=home');
                } elseif ($_SESSION["role"] === 3) {
                    header('Location: ?page=home');
                }
            }
        }
    }

    public function deconnexion()
    {
       $pRepo = new PersonneRepository();
       $pRepo->pLogout();

       header('location: ?page=home');
    }
}