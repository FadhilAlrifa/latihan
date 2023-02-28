@extends('petugas.sidebar')

@section('isi2')
    <h1>ini adalah {{ auth()->user()->level }}</h1>
@endsection
