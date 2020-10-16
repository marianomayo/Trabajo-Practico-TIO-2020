<?php

class TasksView{

    private $title;

    function __construct(){
        $this->title = "Lista de Tareas";
    }


    function showHome(){
        $smarty = new Smarty();
        $smarty->display('templates/home.tpl');
    }


    function ShowTareas($tasks){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('tareas_s', $tasks);
      
        $smarty->display('templates/contenido.tpl'); // muestro el template 
    }


    function showHomeLocation(){
        header("Location:" .BASE_URL. 'tareas');
    }
    
}


?>