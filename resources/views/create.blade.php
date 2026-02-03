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
            <h1 class="text-2xl uppercase font-bold text-orange-500 ">Create</h1>
            <a href="/" class="bg-green-600 px-5 py-2 text-white">Back to Home</a>
        </div>
        <div>
            <div class="pt-20">
            <form action="">
                <div class="flex flex-col gap-3">
                <label for="">Post Name</label>
                <input type="text" name="name"class="border border-gray-400 bg-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-orange-400">
                <label for="">Description</label>
                <textarea type="text" name="description"class="border border-gray-400 bg-white px-4 py-2 rounded focus:outline-none focus:ring-2 focus:ring-orange-400"></textarea>
                <input type="file" name="image" class="bg-blue-500 w-60  px-2 py-1 rounded-2xl cursor-pointer">
                <div>
                    
                </div>
                
                    <div>
                        <input type="submit" class="bg-orange-600 cursor-pointer px-5 py-2 text-white">
                    </div>
                </div>
            </form>
            </div>
           
        </div>
       
    </body>
</html>
