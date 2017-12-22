@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>

                    <div class="panel-body">
                        <form action="/updateEmail" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Change email</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection