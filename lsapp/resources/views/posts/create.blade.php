@extends('layouts.app')

@section('content')
<h1>Create Post</h1>

{!! Form::open(['action'=>'App\Http\Controllers\PostsController@store', 'method'=>'post']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=> 'form-control', 'place-holder'=>'Title'])}}
    </div> 
    <div class="form-group">
        {{Form::label('body','BODY')}}
        {{Form::textarea('body','',['class'=> 'form-control', 'place-holder'=>'Body Text'])}}
    </div>  
    {{Form::submit('submit', ['class'=>'btn btn-primary'])}} 
{!! Form::close() !!}
@endsection
