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

            // Generate user-entered obstacles
            $obstaclesCount = $_POST['obstacles'] ?? 0;
            $obstacles = [];
            
            for ($i = 0; $i < $obstaclesCount; $i++) {
                $ox = rand(0, $grid - 1);
                $oy = rand(0, $grid - 1);
                $obstacles[] = [$ox, $oy];
            }

            // Rover instantiate
            $rover = new Rover($x, $y, $direction, $grid, $obstacles);
            $result = $rover->move($commands);

            // Get obstacles of the rover
            $obstacles = $rover->getObstacles();

            include 'views/rover_result.php';
        }
    }

?>