<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Discord</title>

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
                <div class="flex flex-row h-screen bg-gray-200">
                    <div class="w-16 bg-gray-800 flex flex-col justify-between items-center p-4 ">
                        <div class="flex flex-col space-y-2">
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                        </div>
                        <div class="flex flex-col space-y-2">
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>
                            <a> <div class="rounded-full bg-gray-200 w-8 h-8"></div> </a>

                        </div>
                    </div>
                    <div class="w-64 bg-gray-200 p-4 space-y-2">
                        <div class="flex flex-row justify-between items-center">
                            <h1>Channel Name</h1>
                            <svg class="w-3 h-3 flex-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                        <div class="flex flex-col bg-red-300 h-64">
                            <svg class="w-3 h-3 flex-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            <p class="">GENERAL</p>
                            <div class="bg-red-400">
                                #chat
                            </div>
                        </div>
                        <div class="flex flex-row justify-between items-center bg-red-300 h-64">
                            
                        </div>
                        <div class="bg-red-300 h-64"></div>
                    </div>
                    <div class="flex-auto bg-blue-200 rounded-tl-xl shadow-2xl ">chat box</div>
                </div>
            </main>
        </div>

        @livewireScripts
    </body>
</html>

