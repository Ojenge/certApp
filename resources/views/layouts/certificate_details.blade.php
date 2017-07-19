@extends('layouts.app')

@section('content')
<?php
//dd($data);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                @include('layouts.sidebar')

                <form class="form-horizontal" method="POST" action="{{ url('/certificates') }}">
                    {{ csrf_field() }}

                    <div>
                        <label for="name" class="col-md-4 control-label">Name</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                        </div>
                    </div>
                    <div>
                        <label for="student_id" class="col-md-4 control-label">Student ID</label>

                        <div class="col-md-6">
                            <input id="student_id" type="text" class="form-control" name="student_id" required autofocus>
                        </div>
                    </div>
                    <div>
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email"  required>

                        </div>
                    </div>
                    <!--Start form-->
                    <div>
                        <label for="course" class="col-md-4 control-label">Select Course: </label>
                        <div class="col-md-6">
                            <select class="" name="course">
                                @foreach($data['course_data'] as $course)
                                <option value="{{ $course->id }}">{{ $course->description }}</option>
                                @endforeach

                            </select>
                        </div>

                    </div>
                    <!--end form-->



                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Generate Certificate
                            </button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
@endsection