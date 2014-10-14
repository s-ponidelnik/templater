<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of templater
 *
 * @author s.ponidelnik
 */
include(BaseUrl . '/lib/engine/tpl.php');
class templater {

    private $config;
    public $config2 = "config2_val";
    private $vars = array();
    public $tpl;

    function __get($var) {
        
    }

    function __construct() {
        $this->tpl = new tpl();
        if (file_exists(BaseUrl . '/lib/engine/config.php'))
            include(BaseUrl . '/lib/engine/config.php');
        $this->config = isset($config) ? $config : array();
    }

}
