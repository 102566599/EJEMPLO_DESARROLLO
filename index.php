<?php
    if (!isset($_REQUEST['c'])) {
        require_once "controllers/Dashboard.php";
        $controller = new Dashboard;
        $controller->main();        
    } else {
        $controller = $_REQUEST['c'];
        require_once "controllers/" . $controller . ".php";
        $controller = new $controller;
        $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';
        call_user_func(array($controller, $action));
    }
?>