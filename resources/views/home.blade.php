@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @include('layouts.sidebar')

            </div>

        </div>
                <div class="col-md-10 panel-body">
                    Welcome to the Online Certificate Issuing System.

                    Click any of the links to the left to get started
                </div>



        </div>
    </div>
</div>
@endsection
