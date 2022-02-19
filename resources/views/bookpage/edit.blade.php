<x-layouts.app>
    <x-slot name="header">
        {{ __('Add a Book') }}
    </x-slot>

    <form method="post" class="mt-8 space-y-4">
        @csrf
        <x-validation-errors :errors="$errors"/>

        <div class="space-y-1">
            <x-label for="title">{{ __('Title') }}</x-label>
            <x-input id="title" type="text" name="title" value="{{ old('title') }}" placeholder="e.g. Atomic Habit" autofocus/>
        </div>

        <div class="space-y-1">
            <x-label for="author">{{ __('Author') }}</x-label>
            <x-input id="author" type="text" name="author" value="{{ old('author') }}" placeholder="e.g. James Clear" autofocus/>
        </div>

        <div class="space-y-1">
            <x-label for="pages">{{ __('Number of pages') }}</x-label>
            <x-input id="pages" type="number" name="pages" value="{{ old('pages') }}" placeholder="249" autofocus/>
        </div>

        @php
            $options = ["want to read", "finished reading", "reading"];   
        @endphp
        <div class="space-y-1">
            <x-label for="status">{{ __('Status') }}</x-label>
            <select name="status" id="status" class="rounded block w-full">
                @foreach ($options as $option)
                    <option value="{{ $option }}" @selected( old('status') == $status )>{{ Str::ucfirst((__($option))) }}</option>
                @endforeach
            </select>
        </div>

        <x-button>{{ __('Add Book') }}</x-button>
    </form>
</x-layouts.app>