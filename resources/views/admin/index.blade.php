@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 jumbotron">
            <h2>Admin Panel</h2>
            <div>
                <a class="btn btn-lg btn-primary pull-right" href="{{'admin/new'}}"><i class="fa fa-plus"></i>&nbsp; New Post</a>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="clearfix"></div>
        <br>
        <div class="col-md-12">
            <table class="table table-responsive table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Published At</th>
                    <th>Action</th>
                </tr>
                @foreach($posts as $post)
                <tr>

                    <td>#</td>
                    <td>{{$post->title}}</td>
                    <td>{{date('M,d, Y', strtotime($post->created_at))}}</td>

                    <td>
                        <a id="show" class="btn btn-info" href="{{url('post/')}}/{{$post->id}}"><i class="fa fa-info"></i>&nbsp;Show</a>
                        <a class="btn btn-primary" href="{{url('admin/edit/post')}}/{{$post->id}}"><i class="fa fa-file"></i>&nbsp;Edit</a>

                        {!! Form::open(['url'=>'admin/post/delete/'.$post->id , 'method'=>'DELETE']) !!}
                        <input type="submit" class="btn btn-danger" value="DELETE">
                        {!! Form::close() !!}
                    </td>




                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection