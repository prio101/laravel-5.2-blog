@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center text-capitalize">Add New Post</h3>

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
                <form action="{{url('admin/store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title">
                    </div>
                    
                    <div class="form-group">
                        <label for="post">Post</label>
                        <textarea class="form-control" name="post" id="post" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Save">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection