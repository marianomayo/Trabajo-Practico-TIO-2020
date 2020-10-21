<?php

require_once "./View/TasksView.php";
require_once "./Model/TasksModel.php";

class TasksController extends Controller{

    function tareas(){
        $tasks = $this->taskModel->GetTasks();
        $this->taskView->ShowTareas($tasks);
        parent::__construct();         
    }
    

    function InsertTask(){

        $completed = 0;
        if(isset($_POST['input_completed'])){
            $completed = 1;
        }

        $this->taskModel->InsertTask($_POST['input_title'],$_POST['input_description'],$completed,$_POST['input_priority']);
        $this->taskView->ShowHomeLocation();
    }

    function DeleteTask($params = null){
        $task_id = $params[':ID'];
        $this->taskModel->DeleteTask($task_id);
        $this->taskView->ShowHomeLocation();
    }

    function MarkAsCompletedTask($params = null){
        $task_id = $params[':ID'];
        $this->taskModel->MarkAsCompletedTask($task_id);
        $this->taskView->ShowHomeLocation();
    }


    function AutoCompletar(){
        $tasks = $this->taskModel->GetTasks();

        foreach($tasks as $task){
            $title = $task->title;
            $word = "Completada";

            if(strpos($title, $word) !== false){
                $this->taskModel->MarkAsCompletedTask($task->id);
            }
        }

       $tasks = $this->taskModel->GetTasks();
       
       $this->taskView->ShowHome($tasks);
    }
}


?>