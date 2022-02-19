<x-layouts.app>
    @guest
        <x-slot name="header">
            Read With Friends.
        </x-slot>
        <div class="mt-8">
            <p>{{ __("See what your friend reads and update what's your reading.") }}</p>
        </div>
        <div class="mt-8">
            <p>{{ __('Sign up to get started.') }}</p>
        </div>
    @endguest
    @auth
        <x-slot name="header">
            {{ __('My Books') }}
        </x-slot>
    @endauth
</x-layouts.app>