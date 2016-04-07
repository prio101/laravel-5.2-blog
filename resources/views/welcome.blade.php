@extends('master')

@section('content')
<div class="container">


    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-12">
            <h2>{{$post->title}}</h2>
        </div>
        <div class="col-md-12">
            {{$post->post}}
        </div>
            <div class="col-md-4"><a class="btn  btn-primary" href="post/{{$post->id}}">More</a></div>
        @endforeach
    </div>

</div>
@endsection
