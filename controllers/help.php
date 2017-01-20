<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->js = array('help/js/default.js');
//        $this->view->css = array('hime/css/default.css'
//            , '../public/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css'
//            , '../public/awesome-bootstrap-checkbox/Font-Awesome/css/font-awesome.min.css'
//        );
        $this->view->rander('help/index');
    }

    public function other($arg = false) {

        require 'models/help_model.php';
        $model = new Help_Model();
        $this->view->blah = $model->blah();
    }

}
