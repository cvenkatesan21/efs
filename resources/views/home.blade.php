@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Fidelity Services provides easy solutions to all your financial troubles!</div>

                <div class="panel-body">
                    You are logged in! <a href="{{ url('/customers') }}">click here</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
