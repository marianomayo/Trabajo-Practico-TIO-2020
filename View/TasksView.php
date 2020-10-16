<?php

class TasksView{

    private $title;
    

    function __construct(){
        $this->title = "Lista de Tareas";
    }

    function ShowHome($tasks){

        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('tareas_s', $tasks);
      
        $smarty->display('templates/contenido.tpl'); // muestro el template 
    }


    function showHomeLocation(){
        header("Location:" .BASE_URL. 'home');
    }
    
}


?>