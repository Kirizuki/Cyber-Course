<x-guest-layout>
    <x-authentication-card class="bg-[#1A1A2E] font-sans">
        <x-slot name="logo">
            <a href="." class="p-1.5 font-black text-3xl text-[#E0D6ED] hover:text-[#E0D6ED]">
                Forgot Password
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-[#E5E5E5]">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4 text-[#E5E5E5]" />

        <form method="POST" action="{{ route('password.email') }}" class="font-sans text-[#E5E5E5]">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" class="text-[#E5E5E5]" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="bg-[#3A3A56] hover:bg-[#26263A] text-[#E5E5E5]">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>