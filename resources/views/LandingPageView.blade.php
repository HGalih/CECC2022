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
<img class="mx-auto transition-all duration-150 ease-out " style="width: 30vw" src="{{asset('img/LogoPack.svg')}}">
</div>
<div class="relative">
<img class="absolute -mt-12" src="{{asset('img/ChemicalClutter.svg')}}">
<img style="" src="{{asset('img/BoatWaveOverlay.svg')}}">
{{-- <img class="absolute -mt-12 z-10 top-14 mx-auto left-2 right-0" style="width:62%vw; top:3rem" src="{{asset('img/Line.svg')}}"> --}}

</div>
</div>
<div class="bg-d-blue -mt-12 relative">
    
    <img class="mx-auto" style="width:40vw" src="{{asset('img/AboutCECC.svg')}}">
    <img class="mx-auto mt-20" style="width:45vw" src="{{asset('img/Timeline.svg')}}">
    <img class="mx-auto mt-24" style="width:40vw" src="{{asset('img/Penghargaan.svg')}}">
    <img class="mx-auto mt-24" style="width:50vw" src="{{asset('img/VisiMisi.svg')}}">
    <div class="mx-auto h-full overflow-y-hidden absolute top-0">
    <img class="" style="" src="{{asset('img/FishClutter.svg')}}">
    </div>
    <img class="mx-auto mt-20" style="" src="{{asset('img/DasarLaut.svg')}}">
</div>

</x-guest-layout>
