@extends('layouts.app')

@section('title', 'Roles')

@section('content')
    <h2>Roles</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role['id'] }}</td>
                    <td>{{ $role['name'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
