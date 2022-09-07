<x-guest-layout>

  {{-- Corner Cosmetic & Logo Pack --}}
  <button class="top-0 left-0 sticky z-10" @click="sidebarOpen = !sidebarOpen">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
      </svg>
    </button>
  <img class="absolute top-0 right-0  " style="width:20vw" src="{{asset('img/RightCorner.svg')}}">
  <img class="absolute top-0 left-0  " style="width:20vw" src="{{asset('img/LeftCorner.svg')}}">
  
  {{-- <img class="absolute top-0 left-0 -mt-12 -ml-44" src="{{asset('img/LeftCorner.svg')}}"> --}}
  <div class="bg-l-blue pt-10">
  
  <div>
  <img class="mx-auto transition-all duration-150 ease-out " style="width: 10vw" src="{{asset('img/cecclogo.svg')}}">
  <h3 class="text-center text-3xl">CHEMICAL ENGINEERING</h3>
  <h3 class="text-center text-3xl">CHALLENGE & COMPETITION 2022</h3>
  </div>
  <div class="relative">
  
  </div>
  </div>
  <div class="bg-d-blue -mt-12 relative">
      

  </div>
  
  </x-guest-layout>
  