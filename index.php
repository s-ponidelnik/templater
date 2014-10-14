<?php
DEFINE ('CDir','');
include('TemplateController.php');
include('template.class.php');
include('Functions.php');
$template = new template('test','test.html');
$template->setVars(array('test'=>'!!!test!!!'));
$template->parse();
?>