<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lab4</title>
</head>
<body>
<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Names Challenge</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <?php
        $names = ['ALEC', 'BETH', 'CAROLINE', 'DAVE', 'ELAnor', 'ANNa', 'Freddie', 'AdaM'];
        foreach($names as $name){
            if($name[0] == 'A'){
                continue;
            }

            $reversedString = strrev($name);
            $lowerCase = strtolower($reversedString);

            echo $lowerCase . '<br>';
        }
        ?>
        </div>
    </div>
    
</body>
</html>