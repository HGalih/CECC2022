<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
          h1,h2,h3,h4,h5{
            font-family: 'Inter';
          }
        </style>
    </head>
    <body>
        <div x-data="{ sidebarOpen: true }" class="flex ">
            <aside  class="sticky top-0 h-screen flex-shrink-0 w-64 flex flex-col transition-all duration-300" :class="{ '-ml-64': !sidebarOpen }">
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex-1 flex flex-col min-h-0 bg-gray-800">
  <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
    <div class="flex items-center flex-shrink-0 px-4">
      <img class="h-10" src="{{asset('img/cecclogo.svg')}}"" alt="Workflow">
      <h3 class="ml-2 font-semibold text-white">CECC UKWMS</h3>
    </div>
    <nav class="mt-5 flex-1 px-2 bg-gray-800 space-y-1" aria-label="Sidebar">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="{{route('home')}}" class="bg-gray-900 text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!--
          Heroicon name: outline/home

          Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300"
        -->
        <svg class="text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span class="flex-1"> Home </span>
      </a>

      <a href="{{route('soon')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/users -->
        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
        </svg>
        <span class="flex-1"> Guidance </span>

        <!-- Current: "bg-gray-800", Default: "bg-gray-900 group-hover:bg-gray-800" -->
      </a>

      <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/folder -->
        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
        </svg>
        <span class="flex-1">Register Now</span>

      </a>
      @guest
      <a href="{{route('login')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
        <!-- Heroicon name: outline/calendar -->
        <svg class="text-gray-400 group-hover:text-gray-300 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
        <span class="flex-1"> Login </span>
      </a>
      @endguest

   
    </nav>
  </div>
  @auth
  <div class="flex-shrink-0 flex bg-gray-700 p-4">
    <a href="{{route('profile.show')}}" class="flex-shrink-0 w-full group block">
      <div class="flex items-center">
        <div>
          <img class="inline-block h-9 w-9 rounded-full" src="{{Auth::user()->profile_photo_url}}" alt="">
        </div>
        <div class="ml-3">
          <p class="text-sm font-medium text-white">{{auth()->user()->name}}</p>
          <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">View profile</p>
        </div>
      </div>
    </a>
  </div>
  @endauth
</div>

            </aside>
  
              <main class="  w-full ">
                
                <div class="font-sans text-gray-900 relative antialiased">
                  <button class="top-0 left-0 sticky z-10" @click="sidebarOpen = !sidebarOpen">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 bg-white text-gray-600 p-2 rounded-md m-3">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    
                    </button>
                    <img class="absolute top-0 right-0  " style="width:20vw" src="{{asset('img/RightCorner.svg')}}">
                    <img class="absolute top-0 left-0  " style="width:20vw" src="{{asset('img/LeftCorner.svg')}}">
                    {{ $slot }}
                </div>
              </main>
          </div>
          @livewireScripts

    </body>
</html>
