<?php

require_once "./libs/smarty/Smarty.class.php";

class View{

    protected $title;
    protected $smarty;
    

    function __construct(){
        $this->title = "Login";
        $this->smarty = new Smarty();
    }
}


?>