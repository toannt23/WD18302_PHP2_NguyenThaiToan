<?php

require_once "vendor\autoload.php";

use Php2\Oop\Model\BaseModel;
use Php2\Oop\Controller\BaseController;

$model = new BaseModel();
$controller = new BaseController();
var_dump($model);
echo "<br>";
var_dump($controller);
echo "<br>";
echo $controller->get_title() . "<br>";
echo $model->get_information();
