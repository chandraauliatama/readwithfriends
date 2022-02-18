<x-layouts.app>
    <x-slot name="header">
        Read With Friends.
    </x-slot>
    <div class="mt-8">
        <p>See what your friend reads and update what's your reading .</p>
    </div>

    @guest
        <div class="mt-8">
            <p>Sign up to get started.</p>
        </div>
    @endguest
</x-layouts.app>