@extends('layouts.app')
@section('content')
    <div class="container">
        <div  class="row justify-content-center">
            <div class ="row ">
                <div class="col-sm-12">
                    <div class="full-right">
                        <h2>Dashboard</h2>
                    </div>
                </div>
            </div>

            <table class="table table-bordered ">
                <tr>
                    <th width="80px">No</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Action</th>
                </tr>

                <?php $no=1; ?>
                @foreach($student as $key => $value)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->firstname}}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{route('student.show', $value->id)}}">
                            Details
                            </a>
                            <a class="btn btn-primary btn-sm" href="{{route('student.edit', $value->id)}}">
                            Modifier
                            </a>
                            {{ Form::open(['method' => 'DELETE', 'route'=> ['student.destroy',$value->id], 'style'=>'display: inline;']) }}
                            <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">Supprimer</button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    
    <a href ="{{route('student.create')}}" class="btn btn-success btn-sm">
        Ajouter
    </a>
@endsection