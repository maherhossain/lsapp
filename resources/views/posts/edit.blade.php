@extends('layouts.app')

@section('content')

    <h3>Create Post </h3>

    {!! Form::open(['action'=>['PostsController@update', $post->id], 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="foem-group">
            {{Form::label("title", 'Title')}}
            {{Form::text("title", $post->title, ['class'=> 'form-control', 'placeholder'=>'Title'])}}
        </div>

        <div class="form-group">
                {{Form::label("body", 'Body')}}
                {{Form::textarea("body", $post->body, ['id'=>'article-ckeditor', 'class'=> 'form-control mb-4', 'placeholder'=>'Content goes here'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary btn-block '])}}
    



    {!! Form::close() !!}



@endsection