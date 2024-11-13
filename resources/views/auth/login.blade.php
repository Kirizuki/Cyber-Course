<x-guest-layout class="bg-[#1A1A2E] min-h-screen flex items-center justify-center">
    <x-authentication-card class="bg-[#26263A] p-6 rounded-lg shadow-md">
        <x-slot name="logo">
            <a href="." class="p-1.5 font-black text-3xl text-[#E0D6ED] font-sans hover:text-indigo-600">
                Login
            </a>
        </x-slot>

        <x-validation-errors class="mb-4"/>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <!-- Applying the sans-serif font and setting text colors for the form -->
        <form method="POST" action="{{ route('login') }}" class="font-sans text-[#E5E5E5]">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" class="text-[#E5E5E5]" />
                <x-input id="email" class="block mt-1 w-full bg-[#1A1A2E] text-[#E5E5E5] border-gray-700 focus:border-indigo-500 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-[#E5E5E5]" />
                <x-input id="password" class="block mt-1 w-full bg-[#1A1A2E] text-[#E5E5E5] border-gray-700 focus:border-indigo-500 focus:ring-indigo-500" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center text-[#E5E5E5]">
                    <x-checkbox id="remember_me" name="remember" class="border-gray-700 text-indigo-600" />
                    <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-[#E5E5E5] hover:text-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4 bg-[#3A3A56] text-[#E5E5E5] hover:bg-indigo-500">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>