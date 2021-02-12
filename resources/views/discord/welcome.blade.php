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
                <div class="flex flex-row h-screen bg-gray-600">
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
                    <div class="w-64 bg-gray-600 p-4 space-y-2">
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
                    <div class="flex-auto rounded-xl shadow-2xl p-4 bg-gray-500">
                        <div class="flex flex-row justify-between border-b border-black">
                            <div class="flex flex-row space-x-2">
                                <svg class="text-gray-400 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg>
                                <div class="text-xl text-white font-semibold">chat</div>
                            </div>
                            <div class="flex flex-row space-x-2 text-gray-300">
                                <a href="#" class="">
                                    <svg class="w-6 h-6 hover:text-gray-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                                </a>
                                <a href="#" class="">
                                    <svg class="w-6 h-6 hover:text-gray-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path></svg>
                                </a>
                                <a href="#" class="">
                                    <svg class="w-6 h-6 hover:text-gray-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                </a>
                                <a href="#" class="ml-4">
                                    <form action="#" class="relative">
                                        <input type="text" placeholder="Search" class="rounded bg-gray-800 text-gray-200 text-xs px-2 py-1">
                                            <span class="absolute right-0 top-0 mr-2" style="top:6px">
                                                <svg class="w-4 h-4 text-gray-500 hover:text-gray-50" fill="currentColor" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"></path></svg>
                                            </span>
                                    </form>
                                </a>
                                <a href="#" class="">
                                    <svg class="w-6 h-6 hover:text-gray-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                </a>
                                <a href="#" class="">
                                    <svg class="w-6 h-6 hover:text-gray-50" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="flex h-screen bg-blue-200">Chat</div>
                    </div>
                </div>
            </main>
        </div>

        @livewireScripts
    </body>
</html>

