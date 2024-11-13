<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lab6 | APPDEV</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge 1</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-3xl font-semibold">Fahrenheit to Celsius</h3>
        <?php
        function fahrenheitToCelsius($fahrenheit){
        $celsius = ($fahrenheit - 32) * 5/9;
        $result = $fahrenheit . '&degF = ' . $celsius . '&deg';
        return $result;
        }

        echo fahrenheitToCelsius(68);
        echo '<br>';
        echo 'Arrow Function';
        echo '<br>';

        $celsius = fn($fahrenheit)  => $fahrenheit . '&degF' . ' = ' . ($fahrenheit - 32) * 5/9 . '&deg';
        echo $celsius(68);
        ?>
        </div>
    </div>
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge 2</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-3xl font-semibold">Print Names In Uppercase</h3>
            <?php
            $names = ['Alice', 'Bob', 'Charlie', 'David'];
            function printNamesToUpperCase($names){
                foreach($names as $name){
                    echo strtoupper($name);
                    echo '<br>';
                }
            }
            echo '<br>';
            printNamesToUpperCase($names)
            ?>
        </div>
    </div>
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto ">Challenge 3</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-3xl font-semibold">Find the Longest Word</h1>
        <br>
            <?php
            $sentence = 'The quick brown fox jumped over the lazy dog';
            $longestWord = findLongestWord($sentence);
            function findLongestWord($sentence) {
            $words = explode(' ', $sentence); 
            $longestWord = '';

            foreach ($words as $word) {
            if (strlen($word) > strlen($longestWord)) {
            $longestWord = $word; 
            }
         }
           return $longestWord;
         }
      
         echo $longestWord; 
         ?>
        </div>
    </div>
</body>

</html> 
