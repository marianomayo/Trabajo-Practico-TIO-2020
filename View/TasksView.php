<?php

class TasksView{

    private $title;
    

    function __construct(){
        $this->title = "Lista de Tareas";
    }

    function ShowHome($tasks){

        $html = '
        <!doctype html>
        <html lang="en">
            <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

            <title>'.$this->title.'</title>
            </head>
            <body>
            <h1>'.$this->title.'</h1>

            <div class="container">

          <ul class="list-group">';

              
              foreach($tasks as $task){
                $task->id;
                $markGreen = "";
                if($task->completed == 1){
                  $markGreen = "list-group-item-success";
                  $html .= '<li class="list-group-item ' . $markGreen . '">' . $task->title . '<span class="badge badge-primary badge-pill">'. $task->description .'</span> <button type="button" class="btn btn-outline-danger"><a href="delete/'.$task->id.'">Borrar</a></button></li>';
                }else{
                   $html .= '<li class="list-group-item ' . $markGreen . '">' . $task->title . '<span class="badge badge-primary badge-pill">'. $task->description .'</span> <button type="button" class="btn btn-outline-danger"><a href="delete/'.$task->id.'">Borrar</a></button><button type="button" class="btn btn-outline-success"><a href="completar/'.$task->id.'">Completar</a></button></li>';
                }
              }
          
          
        $html .= '</ul>
                </div>

            <div class="container">
                <form action="insert" method="post">
                    <div class="form-group">
                        <label for="title">Titulo</label>
                        <input class="form-control" id="title" name="input_title" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Titulo de la Tarea</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <input class="form-control" id="description" name="input_description">
                    </div>
                  
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="input_completed" name="input_completed">
                        <label class="form-check-label" for="completed">Completada</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>

                <!-- Optional JavaScript -->
                <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                </body>
            </html>';

            echo $html;
    }


    function showHomeLocation(){
        header("Location:" .BASE_URL. 'home');
    }
    
}


?>