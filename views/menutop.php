<?php
$User = Session::get('User');
$active = ' class="active"';

require 'libs/ActiveForms.php';
$atf = new ActiveForms();

//Generate Top Menu
//PHP 5.4+ can use [] instead of array()

$page_menu = array(
        array("url" => "hime","label" => "Uchi Hime"),
//        array("url" => "txtrepl","label" => "Text replace"),
    );
?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <span class="navbar-brand" href="<?= URL; ?>index"><?=SHORT_NAME_SYSTEM?></span>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                      
                <span class="icon-bar"></span>                      
            </button>
        </div>
        <div class="collapse navbar-collapse" id="nav">
            <ul class="nav navbar-nav">
                <?php
                    
                    /*[Generate MenuTop]*/
                    echo $atf->generateTopMenu($page_menu,$this->pageMenu);
                
                ?>
            </ul>
        </div>
    </div>
</nav>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

