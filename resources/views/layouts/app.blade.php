<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Spel App')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 font-sans text-slate-900 antialiased">

    <header class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-5xl flex-col gap-4 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-2 text-xl font-semibold tracking-tight text-slate-900">
                <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-indigo-600 text-white">S</span>
                Spel App
            </a>

            <nav>
                <ul class="flex flex-wrap gap-1 text-sm font-medium text-slate-600">
                    @php
                        $links = [
                            'categories.index' => 'Categories',
                            'products.index' => 'Products',
                            'prices.index' => 'Prices',
                            'reviews.index' => 'Reviews',
                            'roles.index' => 'Roles',
                        ];
                    @endphp

                    @foreach ($links as $route => $label)
                        <li>
                            <a
                                href="{{ route($route) }}"
                                class="rounded-md px-3 py-2 transition hover:bg-slate-100 hover:text-slate-900 {{ request()->routeIs($route) ? 'bg-indigo-50 text-indigo-700' : '' }}"
                            >
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </header>

    <main class="mx-auto max-w-5xl px-6 py-10">
        @yield('content')
    </main>

    <footer class="mx-auto max-w-5xl px-6 py-10 text-center text-sm text-slate-400">
        Spel App &middot; {{ date('Y') }}
    </footer>

</body>
</html>
