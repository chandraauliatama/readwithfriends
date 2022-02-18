<x-layouts.app>
    <x-slot name="header">
        Sign Up
    </x-slot>

    <form action="{{ route('register') }}" method="post" class="mt-4 space-y-4">
        @csrf

        @if ($errors->any())
                <div class="font-medium text-red-600">
                    {{ __('Whoops! Something went wrong.') }}
            
                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                    @foreach ($errors->all() as $error)
                        <li class="list-none">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="space-y-1">
            <label for="name" class="block">Full Name</label>
            <input type="text" name="name" id="name" placeholder="e.g. Chandra Aulia Tama" class="rounded block w-full" value="{{ old('name') }}">
        </div>

        <div class="space-y-1">
            <label for="email" class="block">Email</label>
            <input type="email" name="email" id="email" placeholder="e.g. cat@gmail.com" class="rounded block w-full" value="{{ old('email') }}">
        </div>

        <div class="space-y-1">
            <label for="password" class="block">Password</label>
            <input type="password" name="password" id="password" class="rounded block w-full">
        </div>

        <button type="submit" class="bg-slate-200 hover:bg-slate-400 px-3 py-2 rounded">
            Create Account
        </button>
    </form>
</x-layouts.app>