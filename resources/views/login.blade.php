@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default ">
                    <div class="panel-heading">Login Page</div>
                    <div class="panel-body">
                        <form action="/admin" method="post">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input class="form-control" type="text" name="username">

                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary btn-block" type="submit" value="Login">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection