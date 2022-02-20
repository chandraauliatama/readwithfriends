<x-layouts.app>
    <x-slot name="header">
        {{ __('Edit a Book') }}
    </x-slot>

    <form action="{{ route('books.update', $book->id) }}" method="post" class="mt-8 space-y-4">
        @method('PATCH')
        @csrf
        <x-validation-errors :errors="$errors"/>
        
        <div class="space-y-1">
            <x-label for="title">{{ __('Title') }}</x-label>
            <x-input id="title" type="text" name="title" value="{{ $book->title }}" placeholder="e.g. Atomic Habit" autofocus/>
        </div>

        <div class="space-y-1">
            <x-label for="author">{{ __('Author') }}</x-label>
            <x-input id="author" type="text" name="author" value="{{ $book->author }}" placeholder="e.g. James Clear" autofocus/>
        </div>

        <div class="space-y-1">
            <x-label for="pages">{{ __('Number of pages') }}</x-label>
            <x-input id="pages" type="number" name="pages" value="{{ $book->pages }}" placeholder="249" autofocus/>
        </div>
        
        <div class="space-y-1">
            <x-label for="status">{{ __('Status') }}</x-label>
            <select name="status" id="status" class="rounded block w-full">
                @foreach ($statuses as $status)
                    <option value="{{ $status }}" @selected( $book->status == $status )>{{ Str::ucfirst((__($status))) }}</option>
                @endforeach
            </select>
        </div>

        <x-button>{{ __('Edit Book') }}</x-button>
    </form>
</x-layouts.app>