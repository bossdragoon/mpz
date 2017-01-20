<?php

class Bootstrap {

    function __construct() {
        $url = explode('/', rtrim((isset($_GET['url']) ? $_GET['url'] : null), '/'));

        if (empty($url[0])) {
            //default page to index
            $this->goToIndex();
            return false;            
        }
        
        $file = 'controllers/' . $url[0] . '.php';
        if (file_exists($file)) {
            require $file;
        } else {
            $this->error();
            return false;
        }        
        
        $controller = new $url[0]; 
        $controller->loadModel($url[0]); 
        $controller->view->pageMenu = $url[0];

        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            } else {
                $this->error();
            }
        } else if (isset($url[1])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}();
            } else {
                $this->error();
            }
        } else {
            $controller->index();
        }
    }
    function goToIndex(){
        require 'controllers/index.php';
        $controller = new Index();
        $controller->index();
        return false;        
    }
    function error() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }
    function loginFalse() {
        require 'controllers/error.php';
        $controller = new Error();
        $controller->notLogin();
        return false;
    }
    function accessDenied() {
        require 'controllers/denied.php';
        $controller = new Denied();
        $controller->index();
        return false;
    }
}
