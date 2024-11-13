<?php
$title = 'Introduction to Advanced PHP';
$author = 'By: Baltazar II S. Dela Cruz';
$body = 'PHP (Hypertext Preprocessor) is a widely used server-side scripting
language that has revolutionized web development. With its simplicity,
flexibility, and vast community support, PHP has become the backbone of
countless dynamic websites and web applications.';
$pageTitle = 'Baltazar\'s PHP Blog |';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?=$pageTitle?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?=$title?></h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"></h2><?=$author?></h2>
            <p><?=$body?></p>
        </div>
    </div>
</body>

</html>
