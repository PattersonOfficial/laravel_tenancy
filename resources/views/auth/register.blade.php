<x-guest-layout>
    <form method="POST" action="/register">
        @csrf

        <!-- Company Name -->
        <div>
            <x-input-label for="company" :value="__('Company')" />
            <x-text-input id="company" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required
                autofocus />
            <x-input-error :messages="$errors->get('company')" class="mt-2" />
        </div>

        <!-- Domain -->
        <div class="mt-2">
            <div class="flex items-baseline">
                <x-input-label for="domain" :value="__('Domain')" />
                <x-text-input id="domain" class="block mt-1 w-full" type="text" name="domain" :value="old('domain')"
                    required />
                <x-input-error :messages="$errors->get('domain')" class="mt-2" />
                .{{ config ('tenancy.central_domains')[0]}}
            </div>
        </div>

        <!-- Name -->
        <div class="mt-2">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
