@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h2 class="text-2xl font-semibold tracking-tight text-slate-900">Products</h2>
    <p class="mt-1 text-sm text-slate-500">Alle producten in de Spel App.</p>

    <div class="mt-6 overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-500">
                    <tr>
                        <th class="px-4 py-3 font-medium">ID</th>
                        <th class="px-4 py-3 font-medium">Naam</th>
                        <th class="px-4 py-3 font-medium">Omschrijving</th>
                        <th class="px-4 py-3 font-medium">Categorie ID</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($products as $product)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 text-slate-500">{{ $product['id'] }}</td>
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $product['name'] }}</td>
                            <td class="px-4 py-3 text-slate-600">{{ $product['description'] }}</td>
                            <td class="px-4 py-3 text-slate-500">{{ $product['categoryId'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-6 text-center text-slate-400">Geen producten gevonden.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
