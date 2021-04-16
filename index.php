<?php

session_start();

require_once "vendor/autoload.php";

if (isset($_GET["page"]) && $_GET["page"]){
    $controllerName = ucfirst($_GET["page"]);
    $className = "App\\Controller\\{$controllerName}Controller";

    $page = new $className();

    $id = (isset($_GET["id"]) && $_GET["id"]) ? $_GET["id"] : null;

    if (isset($_GET["action"]) && $_GET["action"]) {
        $method = $_GET["action"];
        $page->$method($id);
    } else {
        $page->main($id);
    }
} else {
    $page = new App\Controller\HomeController();
    $page->main();
}

?>