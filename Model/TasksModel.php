<?php

class TasksModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tasks;charset=utf8', 'root', '');
    }
         
      function GetTasks(){
          $sentencia = $this->db->prepare("SELECT * FROM task");
          $sentencia->execute();
          return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }
      
      function InsertTask($title,$description,$completed){
          $sentencia = $this->db->prepare("INSERT INTO task(title, description, completed) VALUES(?,?,?)");
          $sentencia->execute(array($title,$description,$completed));
      }
      
      function DeleteTask($task_id){
          $sentencia = $this->db->prepare("DELETE FROM task WHERE id=?");
          $sentencia->execute(array($task_id));
      }
      
      function MarkAsCompletedTask($task_id){
          $sentencia = $this->db->prepare("UPDATE task SET completed=1 WHERE id=?");
          $sentencia->execute(array($task_id));
      
      }
      
}

?>