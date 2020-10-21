<?php

require_once "./Model/TasksModel.php";
require_once "./Model/UserModel.php";
require_once "./View/TasksView.php";
require_once "./View/UserView.php";


class Controller{
    protected $taskModel;
    protected $userModel;
    protected $taskView;
    protected $userView;

    function __construct(){
        $this->taskModel = new TasksModel();
        $this->userModel = new UserModel();
        $this->taskView = new TasksView();
        $this->userView = new UserView();
    }

    function Home(){
        $this->taskView->ShowHome();
    }

}

