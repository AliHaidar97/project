@extends('layouts.app')
@section('content')
    <script>alert('welcome to dashboard\n')</script>
    <div class="well text-center">
        <h1>Dashboard</h1>
    </div>
    <div class="jumbotron  text-center">
    <h2>Welcome {{Auth::user()->name}}</h2>
    </div>
@endsection 