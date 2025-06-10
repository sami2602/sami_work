<?php

// conditional statement , loops, array

// $name="sami";
// var_dump($name)."<br>";

// if-else
// $age=30;
// if ($age>=18 ) {
//     echo"you are an adult";
// }
// else {
//     echo"you are a minor";
// }


// if else if
// $per=60;

// if ( $per>=80 && $per>=100) {
//     echo"you are excellent";
// }

// elseif ($per>=70 && $per<=80) {
//      echo"you are good";
// }

// elseif ($per>=70 && $per<=60) {
//      echo"you are average";
// }
// else {
//     echo"you are poor";
// }


// switch case
$numone = 10;
$numtwo = 20;
$op = "/";

// switch ($op) {
//     case '+':
//         echo $numone + $numtwo;
//         break;
    
//     case '-':
//         echo $numone - $numtwo;
//         break;
    
//     case '*':
//         echo $numone * $numtwo;
//         break; 
//     case '/':
//         echo $numone / $numtwo;
//         break;       
    
//     default:
//         echo "Invalid Operator";
//         break;
// }



// $username = "admin";
// $password = "password";

// if ($username != "" && $password != "") {
//    if ($username == "admin" && $password == "password") {
//            echo "Login successful";
// }
//    else {
//            echo "Login Failed";
// }
// }
//    else
// {
// echo "Please enter both username and password";
// }


// loops

// for ($i=1; $i<=10 ; $i++) { 
//     echo $i . " ". "i love PHP" . "<br>";
// }

// $a= 1;
// while ($a <= 10) {
//     echo $a . " ". "i love PHP" . "<br>";
//     $a++;
// }




// $num=5;
// for ($i=1; $i<=10 ; $i++) { 
//     echo $num ."*". $i."=" .$num*$i."<br>";
// }



// do while loop
// $a=1;
// do {
//     $a++;
//     echo"Hello World"."<br>";
// } while ($a <= 10);



// array
$fruits=["Banana","Mango","Pineapple"];
// echo $fruits[0];    only one fruit name print
// print_r($fruits);      without arranged
// echo "<pre>";            //arranged value     
// print_r($fruits);
// echo "</pre>";




foreach ($fruits as  $values ) {
    echo $values."<br>";
}
?>





