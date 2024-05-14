@extends('master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">


                <div class="panel-body">
                    <a href="{{route('login.index')}}"> Login</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
