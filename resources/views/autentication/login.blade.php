@extends('shared.base')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Login on System</h3>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{route ('autentication')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="login" class="col-sm-2 control-label">Login</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="login" placeholder="Type your login">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Type your password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('footer')
@endsection
