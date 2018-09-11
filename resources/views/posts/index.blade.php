@extends('layouts.app')

@section('content')

    <h3>Posts </h3>


    @if(count($posts)> 0)
        @foreach($posts as $post)
        <div class="container">
            <div class="card card-body bg-light mb-2">
                <div class="row">
                    <div class="col-md-5">
                    <img class="img-fluid img-thumbnail mb-2" src="/storage/cover_image/{{$post->cover_image}}" alt="{{$post->title}}">
                    </div>
                    <div class="col-md-7">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <P>
                                {!!  str_limit($post->body, 350) !!}
                        </P>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Post Found</p>
    @endif

@endsection