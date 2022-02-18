<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadWithFriends</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div class="mx-auto max-w-4xl px-6 grid grid-cols-8 gap-12 mt-16">
        <div class="hidden sm:block col-span-2 border-r border-slate-200 space-y-6">
            @auth
                <ul>
                    <li>
                        <span class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1">
                            {{ auth()->user()->name }}
                        </span>
                    </li>
                    <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1">
                            Feed
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1">
                            My Books
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1">
                            Log Out
                        </a>
                    </li>
                </ul>
            @endauth

            @guest
                <ul>
                    <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1">
                            Home
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1">
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="" class="font-bold text-lg text-slate-600 hover:text-slate-800 block py-1">
                            Register
                        </a>
                    </li>
                </ul>
            @endguest
        </div>
        <div class="col-span-6">
            @isset($header)
                <h1 class="font-bold text-2xl text-slate-800">
                    {{ $header }}
                </h1>
            @endisset
            {{ $slot }}
        </div>
    </div>
</body>
</html>