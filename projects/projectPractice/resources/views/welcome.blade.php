<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Vite + Toastr</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-8">

    <h1 class="text-2xl font-bold mb-4">Laravel + Vite + Toastr Demo</h1>

    <button onclick="toastr.info('This is an info message')" class="bg-blue-500 text-white px-4 py-2 rounded mr-2">Info</button>
    <button onclick="toastr.success('Success! Everything worked.')" class="bg-green-500 text-white px-4 py-2 rounded mr-2">Success</button>
    <button onclick="toastr.error('Oops! Something went wrong.')" class="bg-red-500 text-white px-4 py-2 rounded mr-2">Danger</button>
    <button onclick="toastr.warning('This is a warning.')" class="bg-yellow-500 text-white px-4 py-2 rounded">Warning</button>

</body>
</html>
