<?php
    namespace Models;

    class Rover {
        private $x;
        private $y;
        private $direction;
        private $directions = ['N', 'E', 'S', 'W'];
        private $grid;
        private $obstacles = [];
       
        public function __construct($x, $y, $direction = 'N', $grid = 200, $obstacles = []) {
            $this->x = $x;
            $this->y = $y;
            $this->direction = $direction;
            $this->grid = $grid;
            $this->obstacles = $obstacles;
            // ?: $this->randomObstacles(25);
        }

        public function getX(){
            return $this->x;
        }

        public function getY(){
            return $this->y;
        }

        public function getDirection(){
            return $this->direction;
        }

        public function getObstacles(){
            return $this->obstacles;
        }
 
        // function for generate random obstacles
        // public function randomObstacles($count){
        //     $obstacles = [];

        //     for($i = 0; $i < $count; $i++){
        //         $ox = rand(0, $this->grid - 1);
        //         $oy = rand(0, $this->grid - 1);
                
        //         if($ox !== $this->x || $oy !== $this->y){
        //             $obstacles[] = [$ox, $oy];
        //         }
        //     }

        //     return $obstacles;
        // }

        public function move($commands){
            $upperLetter = str_split(strtoupper($commands));

            foreach($upperLetter as $up){
                switch ($up){
                    case 'F': 
                        if (!$this->forward()) 
                            return ['status' => 'success',
                                'position' => [$this->x, $this->y],
                                'direction' => $this->direction,
                                'obstacle' => $this->lastObstacle ?? null
                            ];
                        break;

                    case 'L':
                        $this->turnLeft();
                        break;

                    case 'R':
                        $this->turnRight();
                        break;

                    default:
                        return [
                            'status' => 'error',
                            'message' => 'Invalid command: '. $up
                        ];
                }
            }

            return ['status' => 'success',
                    'position' => [$this->x, $this->y],
                    'direction' => $this->direction,
            ];
        }

        // function for to turn to the left
        private function turnLeft(){
            $index = array_search($this->direction, $this->directions);
            $this->direction = $this->directions[($index + 3) % 4];
        }

        // function for to turn to the right
        private function turnRight(){
            $index = array_search($this->direction, $this->directions);
            $this->direction = $this->directions[($index + 1) % 4];
        }

        private function forward(){
            $newX = $this->x;
            $newY = $this->y;

            switch ($this->direction){
                case 'N': $newY++; break;
                case 'S': $newY--; break;
                case 'E': $newX++; break;
                case 'W': $newX--; break;
            }

            if($this->hasObstacle($newX, $newY)){
                $this->lastObstacle = [$newX, $newY];
                return false;
            }

            $this->x = $newX;
            $this->y = $newY;

            return true;
        }

        // function for to get obstacles
        private function hasObstacle($x, $y){
            foreach($this->obstacles as $obs){
                if($obs[0] == $x && $obs[1] == $y){
                    return true;
                }
            }

            return false;
        }
    }
?>