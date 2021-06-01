@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

{!! Form::open(['action'=>'App\Http\Controllers\PostsController@update', $post->id]'method'=>'post']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=> 'form-control', 'place-holder'=>'Title'])}}
    </div> 
    <div class="form-group">
        {{Form::label('body','BODY')}}
        {{Form::textarea('body',$post->body,['class'=> 'form-control', 'place-holder'=>'Body Text'])}}
    </div>  
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('submit', ['class'=>'btn btn-primary'])}} 
{!! Form::close() !!}
@endsection
