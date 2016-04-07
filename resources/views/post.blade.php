@extends('master')

@section('content')

    
    <h2>{{$posts->title}}</h2>

    <p>
        {{$posts->post}}
    </p>

    <small>Written By:</small>
    <a href="user/{{$posts->user_id}}">Writer</a>    

@endsection
