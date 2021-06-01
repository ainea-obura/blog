@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-deault">Go back</a>
<h1>{{$posts->title}}</h1>

<div>
    {!!$posts->body!!}
</div>        
<hr>
<small>Written on {{$posts->created_at}}</small>
<hr>
<a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit</a>
{!!Form::open(['action' =>['App\Http\Controllers\PostsController@destroy', $posts->id, 'method'=>'POST', 'class'=>'pull-right']])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}    
{!!Form::close()!!}
@endsection