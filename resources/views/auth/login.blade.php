<x-guest-layout>
    <div class="bg-l-blue h-full pt-48  -mt-20">
        <div class="content text-center">
        <div class="logo">
        <img class="mx-auto" src="{{asset('img/cecclogo.svg')}}">
        </div>
        <h1 class="text-center font-extrabold text-5xl mt-2">CHEMICAL ENGINEERING</h1>
        <h1 class="text-center font-extrabold text-5xl mb-2">CHALLENGE & COMPETITION 2022</h1>
        <h3 class="text-center italic" style="color:#1E5CAA">“Inovation in Chemical Engineering Facing New Normal Life”</h3>
        <div class="form inline-block">
            @if(session('error'))
            <p class="text-red-500">{{session('error')}}</p>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
        <div class="text-center mt-3">
            <input type="text" name="email" id="large-input" placeholder="Email Address" style="width:25vw" class="p-4 text-gray-900 bg-white rounded-t-md border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600">
        </div>
        <div class="text-center">
            <input type="password" name="password" id="large-input" placeholder="Password" style="width:25vw" class="p-4 text-gray-900 bg-white rounded-b-md border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600">
        </div>
        <div class="text-left mt-2">
            <div class="grid grid-cols-2">
                <div class=" col-span-1">
            <label for="remember_me " class="items-center">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>        
                </div>
                <div class="col-span-1 text-right">
                    <a style="color:#1E5CAA" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
                
            </div>
        </div>
        <x-jet-button class="mt-2 w-full text-center" style="display: block; background-color:#1E5CAA;">
            {{ __('Sign in') }}
        </x-jet-button>
        </div>
    </form>
    </div>
    <img class="mx-auto w-full" style="" src="{{asset('img/DasarLaut.svg')}}">

    </div>
 
        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form> --}}

</x-guest-layout>
