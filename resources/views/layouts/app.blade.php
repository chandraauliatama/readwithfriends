<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ReadWithFriends</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="block sm:grid mx-auto max-w-4xl px-6 grid-cols-8 gap-12 mt-8 sm:mt-16">
        <div id="nav"
            class="hidden sm:block col-span-2 border-b sm:border-b-0 sm:border-r border-slate-300 space-y-6 mb-5 pb-3">
            <x-auth-nav />
            <x-guest-nav />
            <button onclick="navToggle()" class="sm:hidden space-y-1.5 fixed top-4 right-6">
                <span class="block w-6 h-0.5 bg-slate-600 rotate-45 translate-y-2"></span>
                <span class="block w-6 h-0.5 bg-slate-600 -rotate-45"></span>
            </button>
        </div>
        <div class="col-span-6">
            <div class="flex items-center place-content-between">
                @isset($header)
                    <h1 class="font-bold text-2xl text-slate-800">
                        {{ $header }}
                    </h1>
                @endisset
                <button id="hamburger" onclick="navToggle()" class="sm:hidden space-y-1.5">
                    <span class="block w-7 h-0.5 bg-slate-600"></span>
                    <span class="block w-7 h-0.5 bg-slate-600"></span>
                    <span class="block w-4 h-0.5 bg-slate-600"></span>
                </button>
            </div>
            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </div>

    <script>
        function navToggle() {
            var nav = document.getElementById("nav");
            var hamburger = document.getElementById("hamburger");
            if (nav.classList.contains("hidden")) {
                nav.classList.remove("hidden");
                hamburger.classList.add("hidden");
            } else {
                nav.classList.add("hidden");
                hamburger.classList.remove("hidden");
            }
        }
    </script>
</body>

</html>
