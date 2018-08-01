@extends('layouts.app')
@section('content')

    <div class="container">
        <div class ="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" >         
                {{ Form::open(['route'=>'student.store','method'=>'POST']) }}
                @include('student.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection


