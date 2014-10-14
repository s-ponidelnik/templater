<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Functions
 *
 * @author s.ponidelnik
 */
class Functions {

    //put your code here
    static function parseStr($vars)
    {
        $vars = (!is_array($vars) && is_array(json_decode($vars, TRUE))) ? json_decode($vars, TRUE) : $vars;
        $vars = (!is_array($vars) && is_array(json_decode($vars, TRUE))) ? json_decode($vars, TRUE) : $vars;
        if (!is_array($vars))
            parse_str($vars, $vars);
        return is_array($vars) ? $vars : array();
    }

}
