<div class="row">
    <div class="col-sm-2">
        {{ Form::label('title', 'Name') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{$errors->has('name') ? 'has-error' : ""}}">
            {{ Form::text('name', NULL, ['class'=> 'form-control', 'id'=>'name', 'placeholder'=>'Nom']) }}
            {{ $errors->first('name', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {{ Form::label('title', 'Prenom') }}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{$errors->has('firstname') ? 'has-error' : ""}}">
            {{ Form::text('firstname', NULL, ['class'=> 'form-control', 'id'=>'firstname', 'placeholder'=>'Prenom']) }}
            {{ $errors->first('firstname', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="form-groupe">
    {{ Form::button(isset($model)? 'Update' : 'Sauvegarder', ['class' => 'btn btn-success', 'type'=>'submit']) }}
</div>