<x-layouts.app>
    <x-slot name="header">
        {{ __('Login') }}
    </x-slot>

    <form action="{{ route('login') }}" method="post" class="mt-4 space-y-4">
        @csrf

        <x-validation-errors :errors="$errors"/>

        <div class="space-y-1">
            <x-label for="email">{{ __('Email') }}</x-label>
            <x-input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="e.g. chandra@sepuh.com" autofocus />
        </div>

        <div class="space-y-1">
            <x-label for="password">{{ __('Password') }}</x-label>
            <x-input id="password" type="password" name="password" />
        </div>

        <x-button>{{ __('Login') }}</x-button>
    </form>
</x-layouts.app>