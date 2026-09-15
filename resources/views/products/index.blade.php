@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h2>Products</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
                <th>Omschrijving</th>
                <th>Categorie ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['name'] }}</td>
                    <td>{{ $product['description'] }}</td>
                    <td>{{ $product['categoryId'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
