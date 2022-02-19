@guest
    <ul>
        <li>
            <a href="/" class="nav-item">
                {{ __('Home') }}
            </a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="{{ route('login') }}" class="nav-item">
                {{ __('Sign in') }}
            </a>
        </li>
        <li>
            <a href="{{ route('register') }}" class="nav-item">
                {{ __('Sign up') }}
            </a>
        </li>
    </ul>
@endguest
