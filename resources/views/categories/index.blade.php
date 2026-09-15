@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <h2>Categories</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
