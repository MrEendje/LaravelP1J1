@extends('layouts.app')

@section('title', 'Reviews')

@section('content')
    <h2>Reviews</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Opmerking</th>
                <th>Gebruiker ID</th>
                <th>Product ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)
                <tr>
                    <td>{{ $review['id'] }}</td>
                    <td>{{ $review['comment'] }}</td>
                    <td>{{ $review['user_id'] }}</td>
                    <td>{{ $review['product_id'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
