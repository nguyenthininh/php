<?php


class Controller
{
    public function invoke(){
        if($_GET['route']== ""){
            $this->home();
        }elseif($_GET['route']== 'listing'){
            $this->listing();
        }elseif($_GET['route']== 'postlogin'){
            $this->postlogin();
        }elseif($_GET['route']== 'login'){
            $this->login();
        }elseif($_GET['route']== 'product'){
            $this->product();
        }else{
            echo "404 Not Found";
        }
    }

    public function home(){
        include_once("views/product.php");
    }

    public function listing(){
        include_once ("views/home.php");
    }

    public function postlogin(){
        include_once ("views/product.php");
    }


    public function login(){
        include_once("views/login.php");
    }

    public function product(){
        include_once("views/home.php");
    }


}

$controller = new Controller();
$controller->invoke();