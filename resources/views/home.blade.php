<x-layouts.app>
    @guest
        <x-slot name="header">
            ReadWithFriends
        </x-slot>
        <div class="mt-8">
            <p>See what your friend reads and update what's your reading .</p>
        </div>
        <div class="mt-8">
            <p>Sign up to get started.</p>
        </div>
    @endguest
</x-layouts.app>