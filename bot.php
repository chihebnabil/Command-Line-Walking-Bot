<?php
// Test 
// php bot.php RW15RW1
// X: 15 Y: -1 Direction: South

// Get Command line Arguments and split it into individual bot command
preg_match_all("/[RL]|W(?!W)[0-9]+/",$argv[1],$commands);

function ProcessMove($cmd) {
// directions name Array it , each time the bot turn the current direction position is + or -1
$directions = ['North', 'East', 'South', 'West'];
// initial position
$cPosition = [0, 0];
// initial direction North
$cDirection = 0;

// foreach bot command 
foreach ($cmd as $v) {
    # code...
      switch (true) {
          case preg_match("/^R$/",$v):
              # code...
              preg_match("/^R$/",$v ,$matchs);
                $cDirection += 1;
                if ($cDirection > count($directions) - 1) $cDirection = 0;
               echo "Turn right\n";
               echo "Current direction  ".$directions[$cDirection]."\n";
              // var_dump($matchs);
              break;
          case preg_match("/^L$/",$v):
              # code...
              $cDirection -= 1;
             if ($cDirection < 0) $cDirection = count($directions) - 1;
              preg_match("/^L$/",$v ,$matchs);
               echo "Turn left\n";
               echo "Current direction  ".$directions[$cDirection]."\n";
              break;
           case preg_match("/W(?!W)[0-9]+/",$v):
              # code...
              $steps = intval(substr($v,1));
              echo "\n Walking ".$steps."\n";
            
              switch ($directions[$cDirection]) {
                  case 'East':
                      # code...
                      $cPosition[0] += $steps;
                      break;
                  case 'West':
                      # code...
                       $cPosition[0] -= $steps;
                      break;
                 case 'North':
                      # code...
                       $cPosition[1] += $steps;
                      break;
                 case 'South':
                      # code...
                       $cPosition[1] -= $steps;
                      break;
                  
                  default:
                      # code...
                      break;
              }
              break;
          
          default:
              # code...
              break;
      }
       
     echo "X: ".$cPosition[0]." Y: ".$cPosition[1]." Direction: ".$directions[$cDirection];
}
}
ProcessMove($commands[0]);



?>
