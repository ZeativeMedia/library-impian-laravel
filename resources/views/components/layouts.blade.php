<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-headers :title="$title" />
</head>

<body class="flex flex-col antialiased w-full h-full min-h-dvh max-w-5xl mx-auto">
    <x-modals />

    <header class="max-sm:flex-col max-sm:items-center max-sm:gap-4 navbar bg-white border-b justify-between">
        <div class="navbar-start max-sm:hidden gap-5">
            <x-brand />
        </div>
        <div class="sm:navbar-center gap-3">
            <a href="/#rekomendasi" class="btn btn-sm btn-ghost">
                Rekomendasi
            </a>

            <a href="/#gallery" class="btn btn-sm btn-ghost">
                Gallery
            </a>    

            <a href="/#about" class="btn btn-sm btn-ghost">
                About
            </a>
        </div>
        <div class="sm:navbar-end gap-3">
            @guest
                <a href="/auth/signin" class="btn btn-sm">
                    Masuk
                </a>
            @endguest

            @auth
                <a href="/dashboard" class="btn btn-sm">
                    Dashboard
                </a>

                <form action="{{ route('auth.signout') }}" method="POST">
                    @csrf
                    <button type="submit"class="btn btn-sm btn-error text-white">
                        Logout
                    </button>
                </form>
            @endauth
        </div>

    </header>
    <main class="{{ $class ?? '' }} flex flex-col">
        {{ $slot }}
    </main>
    <footer class="text-gray-600 bg-white body-font border-t mt-auto">
        <div class="container py-5 mx-auto justify-between flex items-center sm:flex-row flex-col">
            <x-brand />
            <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:py-2 sm:mt-0 mt-4">
                Copyright © 2024 LiAn - Library Impian!
            </p>
        </div>
    </footer>
</body>

</html>
