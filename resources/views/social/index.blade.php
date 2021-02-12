<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Social</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
            <main>
                <div class="flex flex-col h-screen">
                    <div class="flex flex-row justify-between bg-red-300">
                        <div class="flex flex-row items-center">
                            <a href="#" class="">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </a>
                            <a href="#" class="">App Name</a>
                        </div>
                        <div class="flex flex-row items-center">
                            <a href="#" class="">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
                            </a>
                        </div>
                    </div>
                    {{-- Navbar end --}}
                    <div class="flex-none bg-red-600 overflow-x-auto">
                        <ul class="flex space-x-2 p-2 ">
                            <li class="flex flex-col flex-none items-center space-y-1">
                                <div class="relative bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                                    <a href="#" class="block bg-white p-1 rounded-full transform transition hover:rotate-6">
                                        <img src="https://placekitten.com/200/206" alt="cat" class="h-24 w-24 rounded-full">
                                    </a>
                                    <button class="absolute bottom-0 right-2 bg-blue-500 h-8 w-8 rounded-full text-white text-2xl font-semibold border-4 border-white flex justify-center items-center font-mono hover:bg-blue-700">+</button>
                                </div>
                                <a href="#" class="">you</a>
                            </li>
                            <li class="flex flex-col flex-none items-center space-y-1">
                                <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                                    <a href="#" class="block bg-white p-1 rounded-full transform transition hover:rotate-6">
                                        <img src="https://placekitten.com/200/200" alt="cat" class="h-24 w-24 rounded-full">
                                    </a>
                                </div>
                                <a href="" class="">Username</a>
                            </li>
                            <li class="flex flex-col flex-none items-center space-y-1">
                                <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                                    <a href="#" class="block bg-white p-1 rounded-full transform transition hover:rotate-6">
                                        <img src="https://placekitten.com/200/200" alt="cat" class="h-24 w-24 rounded-full">
                                    </a>
                                </div>
                                <a href="" class="">Username</a>
                            </li>
                            <li class="flex flex-col flex-none items-center space-y-1">
                                <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                                    <a href="#" class="block bg-white p-1 rounded-full transform transition hover:rotate-6">
                                        <img src="https://placekitten.com/200/200" alt="cat" class="h-24 w-24 rounded-full">
                                    </a>
                                </div>
                                <a href="" class="">Username</a>
                            </li>
                            <li class="flex flex-col flex-none items-center space-y-1">
                                <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                                    <a href="#" class="block bg-white p-1 rounded-full transform transition hover:rotate-6">
                                        <img src="https://placekitten.com/200/200" alt="cat" class="h-24 w-24 rounded-full">
                                    </a>
                                </div>
                                <a href="" class="">Username</a>
                            </li>
                            {{-- <li>
                                <a href="#" class="">
                                    <img src="https://placekitten.com/200/200" alt="cat" class="h-24 w-24 rounded-full">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <img src="https://placekitten.com/200/200" alt="cat" class="h-24 w-24 rounded-full">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <img src="https://placekitten.com/200/200" alt="cat" class="h-24 w-24 rounded-full">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <img src="https://placekitten.com/200/200" alt="cat" class="h-24 w-24 rounded-full">
                                </a>
                            </li>
                            <li>
                                <a href="#" class="">
                                    <img src="https://placekitten.com/200/200" alt="cat" class="h-24 w-24 rounded-full">
                                </a>
                            </li> --}}

                        </ul>
                    </div>
                    <div class="bg-green-300 overflow-y-auto h-full">
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                        <p class="">a</p>
                    </div>
                    <div class="bg-blue-300 flex flex-none">buttons</div>
                </div>
            </main>
        </div>

        @livewireScripts
    </body>
</html>

