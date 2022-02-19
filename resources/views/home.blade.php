<x-layouts.app>
    <x-slot name="header">
        Read With Friends.
    </x-slot>
    <div class="mt-8">
        <p>{{ __("See what your friend reads and update what's your reading.") }}</p>
    </div>

    @guest
        <div class="mt-8">
            <p>{{ __('Sign up to get started.') }}</p>
        </div>
    @endguest
</x-layouts.app>