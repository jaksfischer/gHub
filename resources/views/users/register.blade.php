@extends('shared.base')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Register</h3>
        </div>
        <form class="form-horizontal" method="post" action="{{ 'save' }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="Write your name" />
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Write your email" />
                </div>
            </div>
            <div class="form-group">
                <label for="login" class="col-sm-2 control-label">Login</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="login" placeholder="Write your Login" />
                </div>
            </div>
            <div class="form-group">
                <label for="gituser" class="col-sm-2 control-label">Git User</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="gituser" placeholder="Write your GitHub user" />
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Write your password" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="reset" class="btn btn-default">Reset all</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
