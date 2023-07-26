<?php
// $task = "hi i am sagor saha";
// echo $task;
// echo "\n";
// echo "hello";

// $fname = "sagor ";
// $lname = "saha";

// var_dump($fname,$lname);

// $name = "Earth";
// echo "we leving on ".$name;
// echo "\n";
// printf("we are living on %s",$name);
// echo "\n";
// $task = "read";

// echo $task;
// echo "\n";

// $task = "hi i am sagor";
// echo $task;

// $number = 12;

// $number =$number * 12;
// echo $number;

// $n = 7;
// $m = $n++;"

// $fname = "Sagor";
// $lname = "Saha";

// printf('my name is %2$s %1$s',$fname,$lname);

// echo "\n";

// $n = 45.126;

// printf("%.2f",$n);
// echo "\n";

// $m = 123.23332;
// $n = 21.3333;

// printf("%08.2f \n",$m);


// $fname = "sagor saha";

// $output = sprintf("my name is %s",$fname);
// echo strtoupper($output); 
// echo "\n";


// $n = 13;
//  if($n % 2 == 0) {
//     echo "$n is an even number";
//  } else {
//     echo "$n is a odd number";
//  }

//  echo "\n";


// $m = 12;
// $n = 13;
// if( $m != $n ) {
//     echo "$m is not equal $n ";
// }

// echo "\n";

// $age = 12;
// if($age >= 13 && $age <= 19 ) {
//     echo " this person is a teenager";
// } else {
//    echo "this person not a teenager";
// }


// $year = 2000;

// if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0 ) {
//     echo " $year is a leap year";
// } else if ( $year % 4 == 0 && $year % 100 == 0 ) {
//     echo " $year is not a leap year"; 
// } else if($year % 4 == 0) {
//     echo " $year is a leap year";
// } else {
//     echo "$year is not a leap  year"; 
// }

// echo "\n";


// if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0 )) {
//     echo "$year is a leap year";
// } else {
//     echo "$year is not a leap year";
// }

// $condition1 = false;
// $condition2 = false;
// $condition3 = false;

// if($condition1 && $condition2 && $condition3) {
//     echo "Hello";
// } elseif( $condition1 && $condition2) {
//     echo "no 1";
// } elseif($condition1){
//     echo "no 2";
// } else{
//     echo "no 3";
// }

//ternary operator


// $n = 12;
// $result = ($n % 2 == 0) ? "even number" : "odd number";
// echo $result;

// close



// $n = 12;

// $r = $n % 2

// switch($r){
//     case 0:
//         echo "$n is an even number \n";
//         break;
//         default:
//         echo "$n is an odd number \n";
// }

 

// $color = 'color';
// switch($color) {
//     case 'blue':
//     case 'green':
//         echo ucwords($color)." is our favourite color";
//         break;
//         case 'red':
//         echo 'red is our favourite color';
//         break;
//         default:
//         echo "this is not a valid color";

    
// }


// $n = -13;
// $r = $n % 2;


// switch(true){
//     case($r == 0 && $n > 0);
//     echo "$n is positive even Number";
//     break;
//     case($r == 1 && $n > 0);
//     echo "$n is a positive odd number";
//     break;
//     case($r == 0 && $n < 0);
//     echo "$n is a negative even number";
//     break;
//      case($r == -1 && $n < 0);
//      echo "$n is a negative odd number";
//      break;
// }

// $n = 13;

// switch($n % 2 == 0):
//     case 0 : 
//         echo "Odd number";
//         break;
//         default:
//         echo "Even number";
//     endswitch;


// for($i = 1; $i < 20; $i+= 2){
//     echo $i;
//     echo PHP_EOL;
//     for($j=0; $j<$i; $j++){
//         echo "&";
//     }
// }

// $i = 0;
// while($i < 10) {
//     $i++;
//     echo $i.PHP_EOL;
// }

// $i = 0;
// do{
//     $i++;
//     echo $i.PHP_EOL;
// }while($i< 10) ;


 

 

// for($i = 10, $j = 0; $i > 0; $i -=1, $j++){
//     echo $i.":".$j;
//     echo PHP_EOL;
// }



// $n = 3;
// for($i = $n, $factorial = 1; $i > 1; $i--){
//     $factorial *= $i;
// }

// printf("Factorial of %d is %d", $n,$factorial);

// echo PHP_EOL;
 
// $n = 5;
// for($i = $n, $factorial = 1; $i > 1; $i--){
//     $factorial *= $i;
// }
// printf("Factorial of  %d is %d",$n,$factorial);



// for ($i = 0; $i <= 100; $i++) {
//     if($i % 7 == 0 ) echo $i."\n";
//     if($i % 11 == 0) echo $i."\n";
// echo $i % 7 ==0 ? $i."\n":'';
// echo $i % 11 ==0 ? $i."\n":'';
// }


// $j = 0;
// while($j++ <5){
 
//     echo $j;
//     echo    PHP_EOL;
   
// }


// $i = 0;
// while($i < 5) {
//     echo $i;
    
// }

// for ( $i = 20; $i < 30; $i++ ){
//     if($i % 12 == 0){
//         echo $i;
//         echo PHP_EOL;
//         break;

//     }

// }
 
// for($i = 0; $i < 30; $i++ ) {
//     if($i < 27) {
//         continue;
//     }
//     echo $i;
//     echo PHP_EOL;
// }


// $veryold = 0;
// $old = 1;
// $new = 1;


// for($i = 0; $i<10; $i++){
//     echo $veryold. " ";
//     $old = $new;
//     $new = $old + $veryold;
//     $veryold = $old;
// }
// for($i = 0; $i < 10; $i++){
//     echo $veryold." ";
//     $old = $new;
//     $new = $old + $veryold;
//     $veryold = $old;

// }

// start chapter_2 code 


// function factorial($n){
//     $result = 1;
//     for($i = $n ; $i > 1; $i--){
//         $result *= $i;
//     }
//     return $result;
// }


 