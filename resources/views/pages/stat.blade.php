
@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>Statistics</h1>
        <div style="width:15%;">
     {!!$chartjs->render()!!}
  </div>
</div>
@endsection