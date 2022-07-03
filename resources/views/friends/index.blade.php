<x-layouts.app>
    <x-slot name="header">
        {{ __('Friends') }}
    </x-slot>

    <div class="space-y-6">
        <div>
            <h1 class="font-bold text-xl text-slate-600 capitalize">
                Add A Friend
            </h1>

            <form action="/friends" method="post" class="mt-4 space-y-3 ">
                @csrf

                <div class="space-y-1">
                    <x-label for="email">{{ __('Email') }}</x-label>
                    <x-input id="email" type="email" name="email" value="{{ old('email') }}"
                        placeholder="e.g. cat@gmail.com" />
                    @error('email')
                        <div class="text-sm text-red-600 mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <x-button>{{ __('Send Request') }}</x-button>
            </form>
        </div>
        @if ($friends->count())
            <div>
                <h1 class="font-bold text-xl text-slate-600 capitalize">
                    Friends
                </h1>
                <div class="mt-4 space-y-3">
                    @foreach ($friends as $friend)
                        <div>
                            {{ $friend->name }}({{ $friend->email }})
                            <form action="/friends/{{ $friend->id }}" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 ml-3">Delete</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if ($pendingFriends->count())
            <div>
                <h1 class="font-bold text-xl text-slate-600 capitalize">
                    Pending Friend Requests
                </h1>
                <div class="mt-4 space-y-3">
                    @foreach ($pendingFriends as $pendingFriend)
                        <div>
                            {{ $pendingFriend->name }}({{ $pendingFriend->email }})
                            <form action="/friends/{{ $pendingFriend->id }}" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 ml-3">Cancel</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if ($requestingFriends->count())
            <div>
                <h1 class="font-bold text-xl text-slate-600 capitalize">
                    Friend Requests
                </h1>
                <div class="mt-4 space-y-3">
                    @foreach ($requestingFriends as $requestingFriend)
                        <div>
                            {{ $requestingFriend->name }}({{ $requestingFriend->email }})
                            <form action="/friends/{{ $requestingFriend->id }}" method="post" class="inline">
                                @csrf
                                @method('PATCH')
                                <button class="text-blue-500 ml-3">Accept</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

    </div>
</x-layouts.app>
