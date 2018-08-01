@extends('layouts.app')
@section('content')

    <div class ="row">
        <div class="col-lg-12 margin-tb" >         
           <div class="pull-left">
                <h2>Detail Etudiant</h2>
           </div>
        </div>
    </div>

    <div class ="row">
        <div class="col-xs-12 col-sm-12 col-md-12" >         
            <div class="form-group">
                <strong>Nom : </strong>
                {{$student->name}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12" >         
                <div class="form-group">
                    <strong>Prenom : </strong>
                    {{$student->firstname}}
                </div>
            </div>
    </div>

    <div class ="row">
        <div class="col-lg-12 margin-tb" >         
            <div class="pull-right">
                <a href="{{route('student.index')}}" class="btn btn-primary">Retour</a>
            </div>
        </div>
    </div>

@endsection


