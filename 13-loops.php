<?php include 'includes/header.php';

//While
$i = 0;
while ($i < 10) {
    echo $i . '<br>';
    $i++;
}


//Do While
$i = 0;
do{
    echo $i . '<br>';
    $i++;
}while($i < 10);


//For loop
for($i=0; $i < 1000; $i++){
    if ($i % 3 ===0 && $i % 5 ===0){
        echo $i . ' - Fizz buzz' . '<br>';
    }
    elseif ($i % 3 ===0){
        echo $i . ' - Fizz' . '<br>';
    }
}
include 'includes/footer.php';