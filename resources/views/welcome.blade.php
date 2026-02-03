<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> crud</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
         <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
       
    </head>
    <body class="bg-[#FDFDFC] px-20  text-[#1b1b18] ">
        <div class="flex items-center pt-2 justify-between">
            <h1 class="text-2xl uppercase font-bold text-green-700 ">home</h1>
            <a href="/create" class="bg-green-600 px-5 py-2 text-white">Add Post</a>
        </div>
       
    </body>
</html>
