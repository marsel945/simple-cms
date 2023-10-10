@extends('layouts.app')

@section('content')
    <h1 class="text-primary">Halo {{ Auth::user()->name }}</h1>
@endsection
