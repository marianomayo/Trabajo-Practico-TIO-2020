<?php
require_once "./View/View.php";
class TasksView extends View{

    protected $title;

    function __construct(){
        $this->title = "Lista de Tareas";
        parent::__construct();
    }


    function showHome(){
        $this->smarty->display('../templates/home.tpl');
    }


    function ShowTareas($tasks){
        $this->smarty->assign('titulo_s', $this->title);
        $this->smarty->assign('tareas_s', $tasks);
      
        $this->smarty->display('templates/contenido.tpl'); // muestro el template 
    }


    function showHomeLocation(){
        header("Location:" .BASE_URL. 'tareas');
    }
    
}


?>