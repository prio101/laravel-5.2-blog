@extends('master')

@section('content')

    <h2>{{$posts->title}}</h2>

    <p>
        {{$posts->post}}
    </p>

    <small>Written By:</small>
    <a href="user/{{$posts->user_id}}">Writer</a>

    @if(Auth::user())
        <div class="col-md-12">
            <a class="btn btn-primary btn-lg pull-right" href="{{url('admin/edit/post')}}/{{$posts->id}}">Edit</a>
        </div>

    @endif

@endsection
