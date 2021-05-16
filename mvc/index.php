<?php

$controller = empty($_GET['controller']) ? 'index' : $_GET['controller'];
$action = empty($_GET['action']) ? 'index' : $_GET['action'];

$controller = ucfirst($controller);

require_once("controller/BaseController.php");
require_once("model/BaseModel.php");
require_once("controller/{$controller}Controller.php");

$className = $controller.'Controller';
$object = new $className();
$object->$action();