<?php
    spl_autoload_register(function ($class) {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        require_once __DIR__ . '/' . $class . '.php';
    });

    use Controllers\RoverController;

    $action = $_GET['action'] ?? 'form';

    $controller = new RoverController();

    if($action === 'move'){
        $controller->execute();
    } else {
       include __DIR__ . '/views/rover_command.php';
    }
?>