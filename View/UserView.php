<?php
require_once "./View/View.php";

class UserView extends View{

    
    function __construct(){
        parent::__construct();
    }
    
    function ShowLogin($message = ""){
        $this->smarty->assign('message', $message);

        $this->smarty->display('templates/login.tpl');
    }
}

?>