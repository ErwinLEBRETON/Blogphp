<?php 

namespace App\Controller;

use App\Entity\Personne;

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

            var_dump($p);
        }
    }
}