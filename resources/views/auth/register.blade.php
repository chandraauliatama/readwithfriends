<x-layouts.app>
    <x-slot name="header">
        {{ __('Sign Up') }}
    </x-slot>

    <form action="{{ route('register') }}" method="post" class="mt-4 space-y-4">
        @csrf
        <x-validation-errors :errors="$errors"/>

        <div class="space-y-1">
            <x-label for="name">{{ __('Name') }}</x-label>
            <x-input id="name" type="text" name="name" value="{{ old('name') }}" placeholder="e.g. Chandra Aulia" autofocus/>
        </div>

        <div class="space-y-1">
            <x-label for="email">{{ __('Email Address') }}</x-label>
            <x-input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="e.g. chandra@sepuh.com"/>
        </div>

        <div class="space-y-1">
            <x-label for="password">{{ __('Password') }}</x-label>
            <x-input id="password" type="password" name="password" />
        </div>

        <div class="space-y-1">
            <x-label for="password_confirmation">{{ __('Confirm Password') }}</x-label>
            <x-input id="password_confirmation" type="password" name="password_confirmation" />
        </div>

        <x-button>{{ __('Create Account') }}</x-button>
    </form>
</x-layouts.app>