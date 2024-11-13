<x-guest-layout>
    <x-authentication-card class="bg-[#1A1A2E] font-sans">
        <x-slot name="logo">
            <a href="." class="p-1.5 font-black text-3xl text-[#E0D6ED] font-sans hover:text-indigo-600">
                Register
            </a>
        </x-slot>

        <x-validation-errors class="mb-4 text-[#E5E5E5]" />

        <form method="POST" action="{{ route('register') }}" class="font-sans text-[#E5E5E5]">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" class="text-[#E5E5E5]" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" class="text-[#E5E5E5]" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" class="text-[#E5E5E5]" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" class="text-[#E5E5E5]" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms" class="text-[#E5E5E5]">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-[#E5E5E5] hover:text-gray-300">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-[#E5E5E5] hover:text-gray-300">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="font-sans underline text-sm text-[#E5E5E5] hover:text-gray-300" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="font-sans ms-4 bg-[#3A3A56] hover:bg-[#26263A]">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>