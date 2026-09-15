@extends('layouts.app')

@section('title', 'Reviews')

@section('content')
    <h2 class="text-2xl font-semibold tracking-tight text-slate-900">Reviews</h2>
    <p class="mt-1 text-sm text-slate-500">Alle reviews in de Spel App.</p>

    <div class="mt-6 overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="bg-slate-50 text-xs uppercase tracking-wide text-slate-500">
                    <tr>
                        <th class="px-4 py-3 font-medium">ID</th>
                        <th class="px-4 py-3 font-medium">Opmerking</th>
                        <th class="px-4 py-3 font-medium">Gebruiker ID</th>
                        <th class="px-4 py-3 font-medium">Product ID</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse ($reviews as $review)
                        <tr class="hover:bg-slate-50">
                            <td class="px-4 py-3 text-slate-500">{{ $review['id'] }}</td>
                            <td class="px-4 py-3 font-medium text-slate-900">{{ $review['comment'] }}</td>
                            <td class="px-4 py-3 text-slate-500">{{ $review['user_id'] }}</td>
                            <td class="px-4 py-3 text-slate-500">{{ $review['product_id'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-6 text-center text-slate-400">Geen reviews gevonden.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
