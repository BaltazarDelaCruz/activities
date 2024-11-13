<?php
 $title  = 'Sum of An Array Number';

$numbers = array(1, 2, 3, 4, 5);
$numbers_string = implode(', ', $numbers);

$sum = array_sum($numbers);

$quantity = count($numbers);


$colors = ['red', 'blue', 'green', 'yellow']; 
$sorts = sort($colors);
$sorted = $colors;
array_push($colors, 'purple', 'orange');
$added = $colors;
array_unshift($colors, 'Red Apple');
$unshifted = $colors;
$colors = str_replace('green', 'Green mango', $colors);
$replaced = $colors;


$listings = [
    [
        'id' => 1,
        'job_title' => 'PHP Developer',
        'company' => 'IBM',
        'email' => 'john@ibm.com',
        'contact_no' => '09168457456',
        'skills' => ['PHP', 'MySQL', 'JavaScript']
    ],
    [
        'id' => 2,
        'job_title' => 'Web Designer',
        'company' => 'AWS',
        'email' => 'jane@aws.com',
        'contact_no' => '09175597456',
        'skills' => ['PhotoShop', 'Illustrator', 'CSS']
    ],
    [
        'id' => 3,
        'job_title' => 'Network Admin',
        'company' => 'CISCO',
        'email' => 'James@cisco.com',
        'contact_no' => '09202224575',
        'skills' => ['Database', 'CyberSecurity', 'Networking']
    ]
];


$newListing = [
    'id' => 4,
    'job_title' => 'Graphic Artist',
    'company' => 'ADOBE',
    'email' => 'princess@adobe.com',
    'contact_no' => '09208456544',
    'skills' => ['Photoshop', 'Bootstrap', 'Flutter']
];

array_push($listings, $newListing);

$secondListing = $listings[1];
$thirdListing = $listings[2];
$first_skill_third_listing = $thirdListing['skills'][0];
$third_skill_third_listing = $thirdListing['skills'][2];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lab2</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge 1</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-3xl font-semibold"><?=$title?></h3>
            <p>The numbers are: <?= $numbers_string?></p>
            <p>The sum of the <?=$quantity?> numbers is: <?=$sum?></p>
        </div>
    </div>
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto">Challenge 2</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-3xl font-semibold">Colors Array</h3>
        <p>Original array: ['red', 'blue', 'green', 'yellow']</p>
        <p><strong>After sorting:</strong></p>
            <pre><?php var_dump($sorted); ?></pre>
            
            <p><strong>After adding 'purple' and 'orange':</strong></p>
            <pre><?php var_dump($added); ?></pre>
            
            <p><strong>After adding 'Red Apple' to the beginning:</strong></p>
            <pre><?php var_dump($unshifted); ?></pre>
            
            <p><strong>After replacing 'green' with 'Green mango':</strong></p>
            <pre><?php var_dump($replaced); ?></pre>
            
            <p><strong>Final array:</strong></p>
            <pre><?php print_r($colors); ?></pre>
        </div>
    </div>
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mx-auto ">Challenge 3</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
        <h1 class="text-3xl font-semibold">Job Listings Array</h1>
            
            <pre><?php print_r($listings); ?></pre>

            <p>
                <?= htmlspecialchars($secondListing['job_title']) ?>
               <?= htmlspecialchars($secondListing['company']) ?>
               <?= htmlspecialchars($secondListing['email']) ?>
            </p>

            <p>
                <?= htmlspecialchars($first_skill_third_listing) ?>
                <?= htmlspecialchars($third_skill_third_listing) ?>
            </p>
        </div>
    </div>
</body>

</html> 
