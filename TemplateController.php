<?php

abstract class TemplateController {

    public static $_aInstances = array();

    public static function FindByName($name, $cache = false) {
        $cache = (!$cache) ? false : self::getCached($name);
        if (isset(self::$_aInstances[$name]))
            return self::$_aInstances[$name];
        elseif (!$cache)
            return false;
        else {
            $$name = new Template($name);
            $$name->content = $cache;
            return $$name;
        }
    }
    public function saveFile($filepath,$content){
        return file_put_contents($filepath, $content);
    }
    public function loadFile($filepath) {
        return file_exists($filepath) ? htmlspecialchars(file_get_contents($filepath)) : false;
    }

    protected function __construct($name, $Instance) {
        self::$_aInstances[$name] = $Instance;
    }

    public function getCached($name) {
        return self::loadFile(CDir . $name . ".html");
    }
    public function setCached($name,$content)
    {
        return self::saveFile(CDir . $name . ".tpl",$content);
    }
}
