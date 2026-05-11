<x-guest-layout>
    <div class="mb-5 text-center">
        <h1 class="text-2xl font-semibold text-slate-800 tracking-tight">Create Your Account</h1>
        <p class="mt-2 text-sm text-slate-500">Start with Sophie and unlock global study opportunities.</p>
    </div>
    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full rounded-xl border-slate-300 bg-slate-50/40 focus:border-blue-500 focus:ring-blue-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full rounded-xl border-slate-300 bg-slate-50/40 focus:border-blue-500 focus:ring-blue-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full rounded-xl border-slate-300 bg-slate-50/40 focus:border-blue-500 focus:ring-blue-500"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-xl border-slate-300 bg-slate-50/40 focus:border-blue-500 focus:ring-blue-500"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-between pt-2">
            <a class="text-sm text-slate-600 hover:text-blue-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4 rounded-xl px-5 py-2.5 !text-sm !normal-case tracking-normal bg-blue-700 hover:bg-blue-800 focus:bg-blue-800 focus:ring-blue-500">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
