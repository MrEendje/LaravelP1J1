@extends('layouts.app')

@section('title', 'Prices')

@section('content')
    <h2>Prices</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Prijs</th>
                <th>Ingangsdatum</th>
                <th>Product ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prices as $price)
                <tr>
                    <td>{{ $price['id'] }}</td>
                    <td>{{ $price['price'] }}</td>
                    <td>{{ $price['effdate'] }}</td>
                    <td>{{ $price['productid'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
