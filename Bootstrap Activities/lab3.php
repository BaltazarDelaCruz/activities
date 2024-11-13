<?php
$results = '';
for($i = 1; $i <= 10; $i++){
    
    for($j = 1;$j <= 10; $j++){
        $result = $i * $j;
        $results .= $i . ' x ' . $j . ' = ' . $result . '<br>';
    }
}
$foreachAnswer = 0;
$numbers = [1, 2, 3, 4, 5]; //sum using foreach loop
foreach($numbers as $number){
    $foreachAnswer += $number;
}
$numbers_string = implode(', ', $numbers);

$forLoopAnswer = 0;
$numbers2 = [1, 2, 3, 4, 5,6,7,8,9,19];  //sum using for loop
$numbers2_string = implode(', ', $numbers2);
for($i = 0; $i < count($numbers2); $i++){
    $forLoopAnswer += $numbers2[$i];
}


$students = 
[
    ['name' => 'john', 'grades' => [85,90,92,88]],
    ['name' => 'jane', 'grades' => [95, 88,91,87]],
    ['name' => 'joe', 'grades' => [75,82,79,88]]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lab3</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge 1</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-3xl font-semibold">Multiplication Table</h3>
        <p><?=$results?></p>
        </div>
    </div>  
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge 2</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-3xl font-semibold">Get the sum of the numbers in an array by using a foreach loop and for loop. </h2>
        <p><Strong>Numbers:</Strong> <?=$numbers_string?></p>
        <p>Sum using for each loop: <?=$foreachAnswer?></p>
        <p><Strong>Numbers:</Strong> <?=$numbers2_string?></p>
        <p>Sum using for loop: <?=$forLoopAnswer?></p>
        </div>
    </div>  
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge 3</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-3xl font-semibold">Average Grades </h2>
       <?php foreach($students as $student): ?>
        <?php
           $name = $student['name'];
           $grades = $student['grades'];

           $sum = array_sum($grades);
           $count = count($grades);
          $average = $sum / $count;
          ?>
          <li><?=$name?>: Average Grade = <?=$average?></li>

        <?php endforeach; ?>
</body>

</html> 
