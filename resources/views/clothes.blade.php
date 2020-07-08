@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Tutti i vestiti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>nome</th>
                            <th>colore</th>
                            <th>taglia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lista_vestiti as $vestito)
                            <tr>
                                <td>{{ $vestito->id }}</td>
                                <td>{{ $vestito->name }}</td>
                                <td>{{ $vestito->color }}</td>
                                <td>{{ $vestito->size }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('page-title', 'Index Vestiti')
