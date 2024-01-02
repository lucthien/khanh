

<?php
require_once("database/db.php");
require_once("Models/Model.php");
require_once("Controllers/BaseController.php");
// duong dan thu muc
const PATH = __DIR__;
// controller mac dinh
$controller = "ProductController";
$action = "Index";
// kt co controller tren duong link ko
if (isset($_GET["controller"])) {
    $controller = ucfirst($_GET["controller"]) . "Controller";
    // kt co action tren duong link ko
    if (isset($_GET["action"])) {
        $action = $_GET["action"];
    }
}
require_once("Controllers/" . $controller . ".php");
$class = new $controller();
$class->$action();