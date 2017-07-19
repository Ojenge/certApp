

@extends('layouts.app')

@section('content')
<?php
//dd($data);
?>
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @include('layouts.sidebar')

            </div>

        </div>
        <div class="col-md-10 col-md-offset-0">
            {!! $chart->render() !!}
        </div>
    </div>
</div>
@endsection