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
        <div class="flex flex-col h-screen mx-auto md:max-w-2xl text-white">
            <div class=" flex flex-row justify-between bg-gray-600">
                <div class="flex flex-row items-center">
                    <a href="#" class="">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </a>
                    <a href="#" class="">App Name</a>
                </div>
                <div class="flex flex-row items-center">
                    <a href="#" class="">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            {{-- Navbar end --}}
            <div class="flex-none bg-black overflow-x-auto">
                <ul class="flex space-x-2 p-2 ">
                    <li class="flex flex-col flex-none items-center space-y-1">
                        <div class="relative bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                            <a href="#" class="block bg-black p-1 rounded-full transform transition hover:rotate-6">
                                <img src="https://placekitten.com/200/206" alt="cat"
                                    class="h-12 w-12 sm:h-16 sm:w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 rounded-full">
                            </a>
                            <button
                                class="absolute bottom-0 right-2 bg-blue-500 h-8 w-8 rounded-full text-white text-2xl font-semibold border-4 border-white flex justify-center items-center font-mono hover:bg-blue-700">+</button>
                        </div>
                        <a href="#" class="">you</a>
                    </li>
                    <li class="flex flex-col flex-none items-center space-y-1">
                        <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                            <a href="#" class="block bg-black p-1 rounded-full transform transition hover:rotate-6">
                                <img src="https://placekitten.com/200/200" alt="cat"
                                    class="h-12 w-12 sm:h-16 sm:w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 rounded-full">
                            </a>
                        </div>
                        <a href="" class="">Username</a>
                    </li>
                    <li class="flex flex-col flex-none items-center space-y-1">
                        <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                            <a href="#" class="block bg-black p-1 rounded-full transform transition hover:rotate-6">
                                <img src="https://placekitten.com/200/200" alt="cat"
                                    class="h-12 w-12 sm:h-16 sm:w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 rounded-full">
                            </a>
                        </div>
                        <a href="" class="">Username</a>
                    </li>
                    <li class="flex flex-col flex-none items-center space-y-1">
                        <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                            <a href="#" class="block bg-black p-1 rounded-full transform transition hover:rotate-6">
                                <img src="https://placekitten.com/200/200" alt="cat"
                                    class="h-12 w-12 sm:h-16 sm:w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 rounded-full">
                            </a>
                        </div>
                        <a href="" class="">Username</a>
                    </li>
                    <li class="flex flex-col flex-none items-center space-y-1">
                        <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-1">
                            <a href="#" class="block bg-black p-1 rounded-full transform transition hover:rotate-6">
                                <img src="https://placekitten.com/200/200" alt="cat"
                                    class="h-12 w-12 sm:h-16 sm:w-16 md:h-20 md:w-20 lg:h-24 lg:w-24 rounded-full">
                            </a>
                        </div>
                        <a href="" class="">Username</a>
                    </li>
                </ul>
            </div>
            {{-- Stories end --}}
            <div class="bg-black overflow-y-auto h-full">
                {{-- Post start --}}
                <div class="flex flex-row justify-between items-center text-white font-semibold ml-2 mb-2">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-0.5">
                            <a href="#" class="block bg-black p-0.5 rounded-full transform transition hover:rotate-6">
                                <img src="https://placekitten.com/200/200" alt="cat" class="h-8 w-8 rounded-full">
                            </a>
                        </div>
                        <div class="text-base">random_cat_2010</div>
                    </div>
                    <div class="">
                        <a href="#" class="">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="">
                    <img class="min-w-full"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                        alt="cat">
                </div>
                <div class="flex flex-row justify-between items-center text-white m-2">
                    <div class="flex flex-row items-center space-x-2">
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-row items-center space-x-2">
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- post buttons --}}
                <div class="flex flex-row space-x-2 mb-2 ml-2">
                    <div class="font-semibold">other_random_cat</div>
                    <div class="">really awesome comment</div>
                </div>
                {{-- comment end --}}
                <div class="bg-gray-500 flex flex-row space-x-2 mb-2 ml-2">
                    <div class="font-semibold">other_random_cat</div>
                    <div class="">really awesome comment</div>
                </div>
                {{-- comment end --}}
                {{-- Post end --}}




                {{-- post start --}}
                <div class="flex flex-row justify-between items-center text-white font-semibold ml-2 mb-2">
                    <div class="flex flex-row items-center space-x-2">
                        <div class="bg-gradient-to-tr from-yellow-400 to-purple-600 rounded-full p-0.5">
                            <a href="#" class="block bg-black p-0.5 rounded-full transform transition hover:rotate-6">
                                <img src="https://placekitten.com/200/200" alt="cat" class="h-8 w-8 rounded-full">
                            </a>
                        </div>
                        <div class="text-base">random_cat_2010</div>
                    </div>
                    <div class="">
                        <a href="#" class="">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="">
                    <img class="min-w-full"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b6/Image_created_with_a_mobile_phone.png/1200px-Image_created_with_a_mobile_phone.png"
                        alt="cat">
                </div>
                <div class="flex flex-row justify-between items-center text-white m-2">
                    <div class="flex flex-row items-center space-x-2">
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-row items-center space-x-2">
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                        </a>
                        <a href="#" class="">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                {{-- post buttons --}}
                <div class="flex flex-row space-x-2 mb-2 ml-2">
                    <div class="font-semibold">other_random_cat</div>
                    <div class="">really awesome comment</div>
                </div>
                {{-- comment end --}}
                <div class="bg-gray-500 flex flex-row space-x-2 mb-2 ml-2">
                    <div class="font-semibold">other_random_cat</div>
                    <div class="">really awesome comment</div>
                </div>
                {{-- comment end --}}
                {{-- Post end --}}
            </div>

            <div class="bg-blue-300 flex flex-none">buttons</div>
        </div>
    </main>
    </div>

    @livewireScripts
</body>

</html>