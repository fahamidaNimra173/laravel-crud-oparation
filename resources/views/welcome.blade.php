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
    <div class="mx-auto mt-50 text-2xl font-medium text-green-600">
        @if (session('success'))
        <h1>{{session('success')}}!</h1>
        @endif
    </div>
    <div>
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">
                            ID
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">
                            Name
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">
                            Description
                        </th>
                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b">
                            Action
                        </th>
                    </tr>
                </thead>

                @foreach( $posts as $post)
                <tbody class="bg-white">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-800 border-b">{{$post->id}}</td>
                        <td class="px-6 py-4 text-sm text-gray-800 border-b">{{$post->name}}</td>
                        <td class="px-6 py-4 text-sm text-gray-600 border-b">
                            {{$post->description}}
                        </td>
                        <td class="px-6 py-4 text-sm border-b">
                            <div class="flex gap-2">
                                <a href="{{route('edit',$post->id)}}">
                                    <button class="px-3 py-1 bg-blue-500 text-white cursor-pointer rounded hover:bg-blue-600">
                                        Edit
                                    </button>
                                </a>
                                <button class="px-3 py-1 bg-red-500 text-white cursor-pointer rounded hover:bg-red-600">
                                    Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>

                @endforeach

            </table>
        </div>

    </div>

</body>

</html>