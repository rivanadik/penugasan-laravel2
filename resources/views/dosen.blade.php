@extends('layout.master')

@section('title', 'Data Dosen')

@section('menuDosen', 'active')

@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1>Data Dosen</h1>
    <div class="row">
        <div class="col-sm-8 col-md-6 m-auto">
            <ul class="list-group">
                @forelse ($dosen as $val)
                    <li class="list-group-item">{{ $val }}</li>
                @empty
                    <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
