@extends('layout')
@section('content')
    <div class="row">
        <div class="mt-2">
            <h1 class="text-center">Welcome, {{auth()->user()->name}}</h1>
        </div>
    </div>
@endsection