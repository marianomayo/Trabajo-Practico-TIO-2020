<?php
    require_once 'Controller/TasksController.php';
    require_once 'Controller/UserController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
   

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "TasksController", "Home");

    //Esto lo veo en TasksView
    $r->addRoute("insert", "POST", "TasksController", "InsertTask");

    $r->addRoute("delete/:ID", "GET", "TasksController", "DeleteTask");
    $r->addRoute("completar/:ID", "GET", "TasksController", "MarkAsCompletedTask");


    //### LOGIN
    $r->addRoute("login", "GET", "UserController", "Login");
    $r->addRoute("verifyUser", "POST", "UserController", "VerifyUser");

    //Ruta por defecto.
    $r->setDefaultRoute("UserController", "Login");

    //Advance
    $r->addRoute("autocompletar", "GET", "TasksController", "AutoCompletar");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>