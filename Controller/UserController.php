<?php

require_once "./View/UserView.php";
require_once "./Model/UserModel.php";

class UserController extends Controller{

    function Login(){
        $this->userView->ShowLogin();
    }


    function VerifyUser(){
        $user = $_POST["input_user"];
        $pass = $_POST["input_pass"];

        if(isset($user)){
            $userFromDB = $this->userModel->GetUser($user);

            if(isset($userFromDB) && $userFromDB){
                // Existe el usuario

                if (password_verify($pass, $userFromDB->password)){

                    session_start();
                    $_SESSION["EMAIL"] = $userFromDB->email;
                    $_SESSION['LAST_ACTIVITY'] = time();

                    header("Location: ".BASE_URL."home");
                }else{
                    $this->userView->ShowLogin("Contraseña incorrecta");
                }

            }else{
                // No existe el user en la DB
                $this->userView->ShowLogin("El usuario no existe");
            }
        }
    }

    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".LOGIN);

    }

}


?>