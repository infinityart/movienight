@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        Username: {{ $user->username }}
                        <br>
                        Email: {{ $user->email }}
                        <br>
                        Birthdate: {{ $user->birthdate }}
                        <br>
                        <hr>
                        <strong>Watched</strong>
                        <br><br>
                        <i>Coming soon</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection