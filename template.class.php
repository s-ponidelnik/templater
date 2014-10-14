<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of template
 *
 * @author s.ponidelnik
 */
class template extends TemplateController {

    public $name;
    public $vars = array();
    private $content;

    function __construct($name = false, $filepath = false) {
        $this->name = empty($name) ? uniqid() : $name;
        $this->getTemplateFile($filepath);
        parent::__construct($this->name, $this);
    }
    function __call($name, $arguments) {
    }
    function __get($varname) {
        if ($varname == 'content') {
            $this->parse();
            return htmlspecialchars_decode($this->content);
        }
    }
    public function getTemplateFile($filepath = false) {
        if (!empty($filepath))
            $this->content = parent::loadFile($filepath);
    }

    function parse($vars = false) {
        $this->parseVars($vars);
        self::setCached($this->name,htmlspecialchars_decode($this->content));
    }

    function setVars($vars = array()) {
        $this->vars = array_merge($this->vars, Functions::parseStr($vars));
    }

    function parseVars($vars = false) {
        if ($vars)
            $this->setVars($vars);
        foreach ($this->vars as $var => $val) {
            $this->content = preg_replace("/{(\s*)" . $var . "(\s*)}/", $val, $this->content);
        }
    }

}
