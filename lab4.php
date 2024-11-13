<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lab4</title>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <?php
            for($number = 1; $number <= 100; $number++){
                if($number % 3 === 0 && $number % 5 === 0 ){
                    echo $number;
                echo  ' is divisible by 3 and 5 <br>';
                }elseif($number % 3 == 0){
                    echo $number;
                    echo ' is divisible by 3 <br>';
                }elseif($number % 5 === 0){
                    echo $number;
                    echo ' is divisible by 5 <br>';
                }else{
                    echo $number;
                    echo "<br>";
                }
            }
        ?>
        </div>
    </div>
    
</body>
</html>