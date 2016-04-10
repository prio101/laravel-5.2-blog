@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center text-capitalize">Edit  Post</h3>

        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::model($blog , ['url'=>['admin/edit/post',$blog->id], 'method'=>'patch' , 'class'=>'form-group' , 'novalidate'=>'novalidate']) !!}
                    {!! Form::label('title') !!}
                    {!! Form::text('title' , null , ['class' =>'form-control']) !!}

                    {!! Form::label('post') !!}
                    {!! Form::textarea('post' , null , ['class'=>'form-control']) !!}

                    {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection