@extends('layouts.app')
@section('content')
    <h1>Create Product</h1>
    {{ Form::open(['action'=>'PostControler@store','method'=>'POST']) }}
        <div class="form-group">
            {{Form::label('Name','Name')}}
            {{Form::text('Name','',['class'=>'form-control','placeholder'=>'Name'])}}
        </div>

        <div class="form-group">
            {{Form::label('Price','Price')}}
            {{Form::text('Price','',['class'=>'form-control','placeholder'=>'Price'])}}
        </div>

        <div class="form-group">
            {{Form::label('Description','Description')}}
            {{Form::textarea('Description','',['class'=>'form-control','placeholder'=>'description'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{{ Form::close() }}

@endsection