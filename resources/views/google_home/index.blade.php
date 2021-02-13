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
        <div class="flex flex-col items-center bg-gray-500 h-screen">
            <div class="text-white font-bold text-5xl mb-2">Simon's home</div>
            {{-- Navbar ish start --}}
            <div class="flex flex-row justify-center items-center space-x-4 border-b border-gray-400 p-4">
                <div
                    class="flex flex-col justify-center items-center bg-yellow-400 text-yellow-100 rounded-full h-20 w-20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                        </path>
                    </svg>
                </div>
                <div
                    class="flex flex-col justify-center items-center bg-green-400 text-green-100 rounded-full h-20 w-20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <div
                    class="flex flex-col justify-center items-center bg-purple-400 text-purple-100 rounded-full h-20 w-20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                        </path>
                    </svg>
                </div>
                <div
                    class="flex flex-col justify-center items-center bg-gray-500 border border-full text-gray-100 rounded-full h-20 w-20">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
            </div>
            {{-- navbar end --}}

            <div class="border-b border-gray-400 p-4">
                <div class="flex flex-col justify-center items-center">
                    <div class="text-white font-semibold">Bedroom</div>
                    <div class="text-gray-200">4 devices</div>
                </div>
                <div class="flex flex-wrap -mx-4 overflow-hidden">
                    <div class="flex flex-col items-center justify-center my-4 px-4 w-1/2 overflow-hidden">
                        <div class="w-10 h-10">
                            <img src="https://img.icons8.com/cotton/344/lamp--v2.png" alt="Lamp icon" loading="lazy">
                        </div>
                        <div class="text-gray-300 mb-2">Lamp in bedroom</div>
                        <div class="">
                            <a href="#" class="text-blue-200">
                                Turn on
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center my-4 px-4 w-1/2 overflow-hidden">
                        <div class="w-10 h-10 text-black">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 18.939C14.2091 18.939 16 17.1482 16 14.939C16 12.7299 14.2091 10.939 12 10.939C9.79086 10.939 8 12.7299 8 14.939C8 17.1482 9.79086 18.939 12 18.939ZM12 16.939C13.1046 16.939 14 16.0436 14 14.939C14 13.8345 13.1046 12.939 12 12.939C10.8954 12.939 10 13.8345 10 14.939C10 16.0436 10.8954 16.939 12 16.939Z"
                                    fill="currentColor" />
                                <path
                                    d="M12 9.04401C13.1046 9.04401 14 8.14858 14 7.04401C14 5.93944 13.1046 5.04401 12 5.04401C10.8954 5.04401 10 5.93944 10 7.04401C10 8.14858 10.8954 9.04401 12 9.04401Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7 1C5.34315 1 4 2.34315 4 4V20C4 21.6569 5.34315 23 7 23H17C18.6569 23 20 21.6569 20 20V4C20 2.34315 18.6569 1 17 1H7ZM17 3H7C6.44772 3 6 3.44772 6 4V20C6 20.5523 6.44772 21 7 21H17C17.5523 21 18 20.5523 18 20V4C18 3.44772 17.5523 3 17 3Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="text-gray-300 mb-2">Speaker</div>
                        <div class="">
                            <a href="#" class="text-blue-200">
                                Turn on
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center my-4 px-4 w-1/2 overflow-hidden">
                        <div class="w-10 h-10">
                            <img src="https://img.icons8.com/cotton/344/lamp--v2.png" alt="Lamp icon" loading="lazy">
                        </div>
                        <div class="text-gray-300 mb-2">Lamp in bedroom</div>
                        <div class="">
                            <a href="#" class="text-blue-200">
                                Turn on
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center my-4 px-4 w-1/2 overflow-hidden">
                        <div class="w-10 h-10">
                            <img src="https://img.icons8.com/cotton/344/lamp--v2.png" alt="Lamp icon" loading="lazy">
                        </div>
                        <div class="text-gray-300 mb-2">Lamp in bedroom</div>
                        <div class="">
                            <a href="#" class="text-blue-200">
                                Turn on
                            </a>
                        </div>
                    </div>


                </div>
            </div>
            <div class="border-b border-gray-400 p-4">
                <div class="flex flex-col justify-center items-center">
                    <div class="text-white font-semibold">Living room</div>
                    <div class="text-gray-200">4 devices</div>
                </div>
                <div class="flex flex-wrap -mx-4 overflow-hidden">
                    <div class="flex flex-col items-center justify-center my-4 px-4 w-1/2 overflow-hidden">
                        <div class="w-10 h-10">
                            <img src="https://img.icons8.com/cotton/344/lamp--v2.png" alt="Lamp icon" loading="lazy">
                        </div>
                        <div class="text-gray-300 mb-2">Lamp in living room</div>
                        <div class="">
                            <a href="#" class="text-blue-200">
                                Turn on
                            </a>
                        </div>
                    </div>

                    <div class="flex flex-col items-center justify-center my-4 px-4 w-1/2 overflow-hidden">
                        <div class="w-10 h-10 text-black">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 18.939C14.2091 18.939 16 17.1482 16 14.939C16 12.7299 14.2091 10.939 12 10.939C9.79086 10.939 8 12.7299 8 14.939C8 17.1482 9.79086 18.939 12 18.939ZM12 16.939C13.1046 16.939 14 16.0436 14 14.939C14 13.8345 13.1046 12.939 12 12.939C10.8954 12.939 10 13.8345 10 14.939C10 16.0436 10.8954 16.939 12 16.939Z"
                                    fill="currentColor" />
                                <path
                                    d="M12 9.04401C13.1046 9.04401 14 8.14858 14 7.04401C14 5.93944 13.1046 5.04401 12 5.04401C10.8954 5.04401 10 5.93944 10 7.04401C10 8.14858 10.8954 9.04401 12 9.04401Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7 1C5.34315 1 4 2.34315 4 4V20C4 21.6569 5.34315 23 7 23H17C18.6569 23 20 21.6569 20 20V4C20 2.34315 18.6569 1 17 1H7ZM17 3H7C6.44772 3 6 3.44772 6 4V20C6 20.5523 6.44772 21 7 21H17C17.5523 21 18 20.5523 18 20V4C18 3.44772 17.5523 3 17 3Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                        <div class="text-gray-300 mb-2">Speaker</div>
                        <div class="">
                            <a href="#" class="text-blue-200">
                                Turn on
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center my-4 px-4 w-1/2 overflow-hidden">
                        <div class="w-10 h-10">
                            <img src="https://img.icons8.com/cotton/344/lamp--v2.png" alt="Lamp icon" loading="lazy">
                        </div>
                        <div class="text-gray-300 mb-2">Lamp in living room</div>
                        <div class="">
                            <a href="#" class="text-blue-200">
                                Turn on
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @livewireScripts
</body>

</html>