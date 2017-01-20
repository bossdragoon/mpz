<?php

class Txtrepl extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->js = array('txtrepl/js/default.js'
            , '../public/bootstrap-switch/js/bootstrap-switch.min.js'
        );
        $this->view->css = array('txtrepl/css/default.css'
            , '../public/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css'
            , '../public/awesome-bootstrap-checkbox/Font-Awesome/css/font-awesome.min.css'
            , '../public/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css'
        );
        $this->view->rander('txtrepl/index');
    }

}
