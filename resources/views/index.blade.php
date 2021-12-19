@extends('shared.base')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Search for GitHub user</h3>
        </div>
        <form class="form-horizontal" method="post" action="{{ 'user'}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="search" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control typeahead" name="search" placeholder="Type the username" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
    </div>

@endsection
@section('footer')
@endsection
