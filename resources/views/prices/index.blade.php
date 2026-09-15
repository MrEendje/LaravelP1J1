@extends('layouts.app')

@section('title', 'Prices')

@section('content')
    <h2 class="text-2xl font-semibold tracking-tight text-slate-900">Prices</h2>
    <p class="mt-1 text-sm text-slate-500">Alle prijzen in de Spel App.</p>

    <div class="mt-6 overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-500">
                    <tr>
                        <th class="px-4 py-3 font-medium">ID</th>
                        <th class="px-4 py-3 font-medium">Prijs</th>
                        <th class="px-4 py-3 font-medium">Ingangsdatum</th>
                        <th class="px-4 py-3 font-medium">Product ID</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($prices as $price)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 text-slate-500">{{ $price['id'] }}</td>
                            <td class="px-4 py-3 font-medium text-slate-900">&euro;{{ $price['price'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $price['effdate'] }}</td>
                            <td class="px-4 py-3 text-slate-500">{{ $price['productid'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-6 text-center text-slate-400">Geen prijzen gevonden.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
