@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h3>{{$post->title}} </h3>
    <div>
        <img class="img-fluid rounded mx-auto d-block" src="/storage/cover_image/{{$post->cover_image}}" alt="{{$post->title}}">
    </div>
    <div>
        <p class="text-success">{!! $post->body !!}</p>
    </div>
    <hr/>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-success">Edit</a>



            {!! Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST','class' =>'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class', 'btn btn-danger'])}}
            {!! Form::close() !!}
        @endif
    @endif

@endsection