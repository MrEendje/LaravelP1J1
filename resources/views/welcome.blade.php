@extends('layouts.app')

@section('title', 'Spel App')

@section('content')
    <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-indigo-600 via-indigo-600 to-indigo-500 px-8 py-20 text-center text-white shadow-sm sm:px-16">
        <div class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full bg-white/10"></div>
        <div class="pointer-events-none absolute -bottom-24 -left-10 h-72 w-72 rounded-full bg-white/10"></div>

        <div class="relative">
            <span class="inline-block rounded-full bg-white/15 px-3 py-1 text-xs font-medium tracking-wide text-indigo-50 uppercase">
                Beheeromgeving
            </span>

            <h1 class="mt-5 text-3xl font-semibold tracking-tight sm:text-5xl">Welkom bij de Spel App</h1>
            <p class="mx-auto mt-4 max-w-xl text-indigo-100">
                Eén overzicht voor alle categorieën, producten, prijzen, reviews en rollen.
            </p>

            <div class="mt-8 flex flex-wrap items-center justify-center gap-3">
                <a
                    href="{{ route('categories.index') }}"
                    class="rounded-lg bg-white px-5 py-2.5 text-sm font-semibold text-indigo-700 shadow-sm transition hover:bg-indigo-50"
                >
                    Bekijk categorieën
                </a>
                <a
                    href="{{ route('products.index') }}"
                    class="rounded-lg border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/10"
                >
                    Bekijk producten
                </a>
            </div>
        </div>
    </div>

    <div class="mt-14">
        <h2 class="text-lg font-semibold tracking-tight text-slate-900">Modules</h2>
        <p class="mt-1 text-sm text-slate-500">Kies een onderdeel om de gegevens te bekijken.</p>

        <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @php
                $cards = [
                    [
                        'route' => 'categories.index',
                        'label' => 'Categories',
                        'description' => 'Bekijk alle categorieën.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h6v6h-6v-6Zm10.5 0h6v6h-6v-6Zm-10.5 10.5h6v6h-6v-6Zm10.5 0h6v6h-6v-6Z" />',
                    ],
                    [
                        'route' => 'products.index',
                        'label' => 'Products',
                        'description' => 'Bekijk alle producten.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25M21 7.5v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />',
                    ],
                    [
                        'route' => 'prices.index',
                        'label' => 'Prices',
                        'description' => 'Bekijk alle prijzen.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m3.75-9.75a3.75 3.75 0 0 0-3.75-1.5c-2.071 0-3.75 1.343-3.75 3s1.679 3 3.75 3 3.75 1.343 3.75 3-1.679 3-3.75 3a3.75 3.75 0 0 1-3.75-1.5" />',
                    ],
                    [
                        'route' => 'reviews.index',
                        'label' => 'Reviews',
                        'description' => 'Bekijk alle reviews.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="m11.48 3.499 2.036 4.126a.485.485 0 0 0 .365.266l4.552.662a.485.485 0 0 1 .27.828l-3.293 3.21a.485.485 0 0 0-.14.43l.778 4.535a.485.485 0 0 1-.704.512l-4.072-2.14a.485.485 0 0 0-.452 0l-4.072 2.14a.485.485 0 0 1-.704-.512l.778-4.535a.485.485 0 0 0-.14-.43l-3.293-3.21a.485.485 0 0 1 .27-.828l4.552-.662a.485.485 0 0 0 .365-.266l2.036-4.126a.485.485 0 0 1 .868 0Z" />',
                    ],
                    [
                        'route' => 'roles.index',
                        'label' => 'Roles',
                        'description' => 'Bekijk alle rollen.',
                        'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />',
                    ],
                ];
            @endphp

            @foreach ($cards as $card)
                <a
                    href="{{ route($card['route']) }}"
                    class="group flex flex-col gap-3 rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-indigo-200 hover:shadow-md"
                >
                    <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-50 text-indigo-600 group-hover:bg-indigo-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                            {!! $card['icon'] !!}
                        </svg>
                    </span>

                    <span class="font-semibold text-slate-900 group-hover:text-indigo-700">{{ $card['label'] }}</span>
                    <span class="text-sm text-slate-500">{{ $card['description'] }}</span>
                </a>
            @endforeach
        </div>
    </div>
@endsection
