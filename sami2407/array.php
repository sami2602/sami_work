<?php

// $fruits=[
//     ["Apple","Mango","Orange"],
//     ["Banana","Pineapple","Cherries"],
//     ["Grapes","Guava","Lychee"]
// ];

// echo $fruits[1][2];




// echo "<pre>";
// print_r($fruits);
// echo "</pre>";



// $student=["Ali"=>18, "Zain"=>19, "Hasan"=>21];
// echo "<pre>";
// print_r($student);
// echo "</pre>";

// foreach ($student as $key => $value) {
//     echo $key . " ". $value . "<br>";
// }


// $student=["Ali", "Zain", "Hasan"];

// sort($student);
// $clength=count($student);

// for ($i=0; $i < $clength ; $i++) { 
//  echo $student[$i];
//  echo "<br>";
// }

// foreach ($student as  $value) {
//      echo $value."<br>";
// }

$student=["Ali"=>18, "Zain"=>22, "Hasan"=>21];
asort($student);

foreach ($student as $key => $value) {
    echo $key . " ". $value . "<br>";
}


$student=["Ali"=>18, "Zain"=>22, "Hasan"=>21];
arsort($student);

foreach ($student as $key => $value) {
    echo $key . " ". $value . "<br>";
}

$student=["Ali"=>18, "Zain"=>22, "Hasan"=>21];        //assending order as per key
ksort($student);

foreach ($student as $key => $value) {
    echo $key . " ". $value . "<br>";
}


$student=["Ali"=>18, "Zain"=>22, "Hasan"=>21];           //dessending order as per key
krsort($student);

foreach ($student as $key => $value) {
    echo $key . " ". $value . "<br>";
}



?>