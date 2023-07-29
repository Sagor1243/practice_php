<?php

 
// $students = array(
//     "rahim",
//     "karim",
//     123,
//     "monir",
// );
 
//  for($i = 0; $i<count($students);$i++) {
//     echo $students[$i]. "\n";
//  }
 
// $students =[
//     "rahim",
//     "karim",
//     123,
//     "monir",
// ];

// $students[2] = "sagor";
// array_unshift($students,"kamal");
// array_push($students,"kamal");

// $student = array_pop($students);
// $student = array_shift($students);

 
//  for($i = 0; $i < count($students) ; $i++) {
//     echo $students[$i]."\n";
//  }



//  for($i = 0; $i < count($students); $i++){
//     echo $students[$i]."\n";
//  }

//  for($i = 0; $i < count($students); $i++) {
//     echo $students[$i]
//  }

//  for($i = $n-1; $i >=0; $i--) {
//     echo $students[$i]."\n";
//  }





//some information
 //data entry this 2 item;
// array_unshift();first element item add;
// array_push();last element one item add;

//data remove for this 2 item;
// array_shift(); first element remove;
// array_pop(); last element remove;


// $students = [
//     '12' => 'sagor',
//     '13' => 'hasan',
//     '14' => 'easin'
// ];
// echo $students[12];


// $food = [
//     'vagetable' => 'saksobji,kola,am,jam',
//     'fruits' => 'am,jam, kola',

// ];
// echo $food['vagetable'];

// foreach($food as $key => $value){
//     echo $key."=".$value."\n";
// }

// $keys = array_values($foods);
// for($i = 0; $i<count($values); $i++){
//     $ 
// }


//  $foods = [
//     'vagetables' => explode(',','kocu,molandi,tamato,carrot'),
//     'fruits' => explode(',','orange,banana,apple'),
//     'drinks' => explode(',','water,milk'),
//  ];

// //  print_r($foods);
// array_push($foods['drinks'],'orange juice');
// print_r($foods);


// $sample = [
//     'test' => [
//         'test-again' => [
//             'a',
//             'b',
//             'c',
//             'd'
//         ],
//         ],
//     ];
//     echo $sample['test']['test-again'][2];
//     print_r($sample);

// $student = array(
//     'fname' => 'jamal',
//     'lname' => 'ahamed',
//     'age' => '21',
//     'class' => 'inter',
//     'section' => 'B',
// );
// print_r($student);
// echo $student['fname']." ".$studnet['lname']."\n";
// printf("%s %s \n",$student['fname'],$student['lname']); 
// echo PHP_EOL;
// $serialized = serialize($student);
// echo $serialized;

 

// $newstudent = unserialize($serialized);
// print_r($newstudent);



// echo PHP_EOL;
// $jsondata = json_encode($student);
// echo $jsondata;

// $student2 = json_decode($jsondata);
// print_r($student2);




// $person = array('fname' => 'hello','lname' => 'world');
// $newperson = $person;
// $newperson['lname']='pluto';

//  print_r($person);
//  print_r($newperson);

//  function printData(&$person) {
//     $person['fname'] .= " changed";
//     print_r($person);
//  }

//  printData($person);
//  print_r($person);



// $person = array('fanme' => 'sagor','lname' => 'saha');
// print_r($person);
// unset($person['lname']);
// print_r($person);


// $name= " ";



// if(isset($name)){
//     echo "Name is set";
// } else {
//     echo "not set";
// }


// echo "\n";


// if(isset($name) && (is_numeric($name) || $name != '')) {
//     echo 'Name is set and Not emty';
// } else {
//     echo 'Name is empty';
// }

// $fruits = array('apple','bannana','orange','plum','dates','mango');
// $random = array("a" => 12,"b" => 21,"c"=>22,"d" => 23, "e" => 24,);
// $someFruits = array_slice($fruits,-5,3 ) ;
// print_r($someFruits);

// $newFruits1 = array_slice($fruits,0,3);
// $newFruits2 = array_slice($fruits,3,null,true);

// $newFruits = array_merge($newFruits1,$newFruits2);
// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);


// $newFruitsPlus = $newFruits1 + $newFruits2;

// print_r($newFruitsPlus);

// $r1 = array_slice($random,0,2);
// $r2 = array_slice($random,4,null);
// print_r($r1);
// print_r($r2);

$fruits = array('a'=> 'apple','b' => 'bannana','f' =>'orange','c' => 'plum', 'd' => 'dates', 'e' => 'mango');
$numbers = array(1,2,3,4,54,32,45,56);

asort($fruits);
// print_r($fruits);
asort($numbers);
print_r($numbers);

foreach($numbers as $number){
    echo $number. "\n";
};