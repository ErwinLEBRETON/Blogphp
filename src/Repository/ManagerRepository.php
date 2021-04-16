<?php

namespace App\Repository;

use PDO;

class ManagerRepository
{
    private $tu = "localhost";
    private $dbName = "blogphp";
    private $port = "3306";
    private $userName = "root";
    private $password = "root";

    public function dbConnexion()
    {
        $co = new PDO(
            "mysql:host={$this->tu};dbname={$this->dbName};port={$this->port};charset=utf8",
            $this->userName,
            $this->password
        );

        $co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $co;
    }

    public function dbDeconnexion($co)
    {
        $co = null;
    }
}