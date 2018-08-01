@extends('layouts.app')
@section('content')

    <div class="container">
        <div class ="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" >         
                {{ Form::model($student, ['route' => ['student.update',$student->id], 'method'=>'PATCH']) }}
                    @include('student.form')
                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection


