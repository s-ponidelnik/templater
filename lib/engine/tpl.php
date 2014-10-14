<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of tpl
 *
 * @author s.ponidelnik
 */
class tpl {
    //put your code here
    public $vars=array();
    public $content='';
    public $tpl_name;
    function __construct($tpl_name) {
        $this->tpl_name = $tpl_name;
    }
}
