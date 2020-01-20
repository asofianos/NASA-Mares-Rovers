<?php
echo "NASA rovers. Give the Grid Size ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);

$plateau = str_split($line); 


echo "Give the position for the rover #1: ";
$handle2 = fopen ("php://stdin","r");
$line2 = fgets($handle2);
$m = str_split($line2); 

$x1 = $m[0];
$y1 = $m[2];
$h1 = $m[4];

echo "Give the moves in order for the rover #1: ";
$handle3 = fopen ("php://stdin","r");
$line3 = fgets($handle3);
$moves1 = str_split($line3); 


for($i=0;$i<sizeof($moves1)-1;$i++){
  if ( $moves1[$i]=="L" || $moves1[$i]=="R" ) {
    //heading north
    if($h1 == "N" && $moves1[$i]=="L") {
      $h1 = "W";
    }
    else if( $h1 == "N" && $moves1[$i]=="R" ) {
      $h1 = "E";
    }
    //heading west
    else if( $h1 == "W" && $moves1[$i]=="L") {
      $h1 = "S";
    }
    else if( $h1 == "W" && $moves1[$i]=="R") {
      $h1 = "N";
    }
    //heading south
    else if( $h1 == "S" && $moves1[$i]=="L") {
      $h1 = "E";
    }
    else if( $h1 == "S" && $moves1[$i]=="R") {
      $h1 = "W";
    }
    //heading east
    else if( $h1 == "E" && $moves1[$i]=="L") {
      $h1 = "N";
    }
    else if( $h1 == "E" && $moves1[$i]=="R") {
      $h1 = "S";
    }
  }
 
  if($moves1[$i] == "M") {
    if($h1 == "N") {
      $y1++;
    }
    else if($h1 == "S") {
      $y1--;
    }
    else if($h1 == "E") {
      $x1++;
    }
    else if($h1 == "W") {
      $x1--;
    }
  }


}


echo "Give the position for the rover #2: ";
$handle4 = fopen ("php://stdin","r");
$line4 = fgets($handle4);
$m = str_split($line4); 

$x2 = $m[0];
$y2 = $m[2];
$h2 = $m[4];

echo "Give the moves in order for the rover #2: ";
$handle5 = fopen ("php://stdin","r");
$line5 = fgets($handle5);
$moves2 = str_split($line5); 

for($i=0;$i<sizeof($moves2)-1;$i++){
  if ( $moves2[$i]=="L" || $moves2[$i]=="R" ) {
    //heading north
    if($h2 == "N" && $moves2[$i]=="L") {
      $h2 = "W";
    }
    else if( $h2 == "N" && $moves2[$i]=="R" ) {
      $h2 = "E";
    }
    //heading west
    else if( $h2 == "W" && $moves2[$i]=="L") {
      $h2 = "S";
    }
    else if( $h2 == "W" && $moves2[$i]=="R") {
      $h2 = "N";
    }
    //heading south
    else if( $h2 == "S" && $moves2[$i]=="L") {
      $h2 = "E";
    }
    else if( $h2 == "S" && $moves2[$i]=="R") {
      $h2 = "W";
    }
    //heading east
    else if( $h2 == "E" && $moves2[$i]=="L") {
      $h2 = "N";
    }
    else if( $h2 == "E" && $moves2[$i]=="R") {
      $h2 = "S";
    }
  }
 
  if($moves2[$i] == "M") {
    if($h2 == "N") {
      $y2++;
    }
    else if($h2 == "S") {
      $y2--;
    }
    else if($h2 == "E") {
      $x2++;
    }
    else if($h2 == "W") {
      $x2--;
    }
  }


}

print "Rover #1 finish in position: $x1 $y1 $h1 \n";
print "Rover #2 finish in position: $x2 $y2 $h2 ";




?>