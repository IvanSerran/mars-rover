<?php 
    namespace Controllers;
    
    use Models\Rover;

    class RoverController {
        public function execute(){
            $x = $_POST['x'] ?? 0;
            $y = $_POST['y'] ?? 0;
            $direction = $_POST['direction'] ?? 'N';
            $commands = $_POST['commands'] ?? '';

            $grid = 200;

            $rover = new Rover($x, $y, $direction, $grid);
            $result = $rover->motion($commands);

            $obstacles = $rover->getObstacles();

            include 'views/rover_result.php';
        }
    }

?>