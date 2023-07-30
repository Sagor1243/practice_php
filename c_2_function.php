<?php
include_once "chapter_1.php";




 



// function factorial(int $n){
   
//     $result = 1;
//     for($i = $n;  $i > 1; $i--) {
//         $result *= $i;
//     }
//     return $result;
// }


// $x = 8;
// echo "Factorial is $x is ".factorial($x);

// function serve($foodType = "coffe",$numberOfItems = "1 cups"){
//     echo "$numberOfItems of $foodType has/have been serve";
// }

// $foodType = "tea";
 

// serve($foodType, );

// function sum( int...$numbers):int {
//     $result = 0;

// }


// echo sum(3,4,5);

// function sum(int ...$numbers):int{
//     $result = 0;
//     for($i = 0; $i<count($numbers); $i++) {
//         $result += $numbers[$i];
//     }
//     return $result;
// }
// echo sum(4,5,6,7);


// function sum(int ...$numbers):int{
//     $result = 0;
//     for ($i = 0; $i<count($numbers);$i++) {
//         $result += $numbers[$i];
//     }
//     return $result;
// }

// echo sum(2,3);


//recursion mean nije nije  call  
//recarsive function

 
// function printNumber($counter,$end,$stepping=1){
//     if($counter > $end) {
//         return;
//     }
//     echo $counter."\n";
//     $counter += $stepping;
//     printNumber($counter,$end, $stepping);
// }
// printNumber(21,31,4);



// function factorial($n){
//     if($n <= 1) {
//         return 1;
//     }
//     return $n * factorial($n -1);
// }
// echo factorial(5);

 

//fibonacci series;

// function fibonacci($old,$new, $end) {
//     static $start;
//     $start = $start ?? 1;

//     if($start > $end) {
//         return;
//     }
//     $start++;
//     echo $old." ";
//     $_temp = $old + $new;
//     $old = $new;
//     $new = $_temp;

//     fibonacci($old,$new, $end);


// }

// fibonacci(0,1,10);


// $name = "Earth"; //global scope;

// function dosomthing(){
//     global $name;
//     echo $name;
//echo $GLOBALS['name'];
// }
// dosomthing();


// function dosomthing(){
//     global $name; //local scope;
//     $name = "Earth";
//     echo $name;
// }
// dosomthing();


// function dosomthing() {
//     static $i;
//     $i = $i ?? 0;
//     $i++;
//     echo $i;
//     echo "\n";
// }
 

// dosomthing();
// dosomthing();
// dosomthing();

// function doExtra(){
//     static $i;
//     $i = $i ?? 0;
//     $i++;
//     echo $i;
//     echo "\n";
// }
// doExtra();




