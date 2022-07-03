@auth
    <ul>
        <li>
            <span class="nav-item">
                {{ Str::title(Str::limit(auth()->user()->name, 14, '...')) }}
            </span>
        </li>
        <li>
            <a href="" class="nav-item">
                {{ __('Feed') }}
            </a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="{{ route('books.index') }}" class="nav-item">
                {{ __('My Books') }}
            </a>
        </li>
        <li>
            <a href="{{ route('books.create') }}" class="nav-item">
                {{ __('Add a Book') }}
            </a>
        </li>
        <li>
            <a href="/friend" class="nav-item">
                {{ __('Friends') }}
            </a>
        </li>
    </ul>
    <ul>
        <li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="nav-item">
                    {{ __('Log Out') }}
                </button>
            </form>
        </li>
    </ul>
@endauth
