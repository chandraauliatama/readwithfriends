<x-layouts.app>
    <x-slot name="header">
        {{ __('My Books') }}
    </x-slot>

    <div class="space-y-6">
        @foreach ($bookByStatus as $status => $books)
            <div>
                <h1 class="font-bold text-xl text-slate-600 capitalize">{{ $status }}</h1>
                <div class="mt-4 space-y-3">
                    @foreach ($books as $book)
                        <x-book :book="$book">
                            <x-slot name="links">
                                <a href="{{ route('books.edit', $book->id) }}"
                                    class="bg-slate-600 font-semibold px-3 py-2 rounded-md border-slate-400 border text-white hover:text-slate-900 hover:bg-slate-300">Edit</a>
                            </x-slot>
                        </x-book>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-layouts.app>
