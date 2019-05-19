@extends('layouts.app')
@section('content')
    <body>
            <h1>Product:</h1>
            @if(count($product)>0)
                @foreach($product as $is)
                    <hr>
                    <div class="well text-left">
                    <h3><a href="/posts/{{$is->id}}">{{$is->Name}}</a></h3>
                    <small>Written on:{{$is->created_at}}</small>
                    </div>
                @endforeach
            @else
                <hr>
                <h2>There no product</h2>
            @endif
      <br>
      @if(!Auth::guest())
      <p><a class="btn  btn-primary btn-lg" href="/posts/create" role="button">create</a></p>
      @endif
    </body>
@endsection