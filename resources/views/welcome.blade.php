@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h2 class="text-center">Blogg</h2>
                </div>
            </div>
        </div>
        @foreach($posts as $post)
        <div class="row">
            <div class="col-md-12">
                <h2>{{$post->title}}</h2>
            </div>
            <div class="col-md-12">
                <p>{{$post->post}}</p>

                <a class="btn btn-primary" href="post/{{$post->id}}">Read More</a>
            </div>


        
        </div>
        @endforeach
     </div>
@endsection
