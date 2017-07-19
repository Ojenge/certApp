@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @include('layouts.sidebar')
                <div class="col-md-10 panel-body">
                    Main Dashboard
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
