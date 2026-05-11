<x-guest-layout>
    <div class="mb-5 text-center">
        <h1 class="text-2xl font-semibold text-slate-800 tracking-tight">Reset Password</h1>
        <p class="mt-2 text-sm text-slate-500">Enter your email and we will send you a secure reset link.</p>
    </div>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full rounded-xl border-slate-300 bg-slate-50/40 focus:border-blue-500 focus:ring-blue-500" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end pt-2">
            <x-primary-button class="rounded-xl px-5 py-2.5 !text-sm !normal-case tracking-normal bg-blue-700 hover:bg-blue-800 focus:bg-blue-800 focus:ring-blue-500">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
