@extends('layouts.app')

@section('body')
<div class="row">
    <div class="col-lg-6 offset-lg-3">
        {!! Form::open(['method'=>'POST', 'action'=>'UsersController@store', 'files' => true, 'class' => 'form-horizontal']) !!}
            <fieldset>
            <legend>Register</legend>
            <div class='form-group row' bis_skin_checked='1'>
                {{-- first name --}}
                {!! Form::label('fname', 'First Name',['class' => 'col-sm-4 col-form-label']); !!}
                <div class='col-sm-8' bis_skin_checked='1'>
                    {!! Form::text('fname', old("fname"), ['class' => 'form-control','placeholder' => 'First Name']); !!}
                </div>
            </div>
            <div class='form-group row' bis_skin_checked='1'>
                {{-- last name --}}
                {!! Form::label('lname', 'Last Name',['class' => 'col-sm-4 col-form-label']); !!}
                <div class='col-sm-8' bis_skin_checked='1'>
                    {!! Form::text('lname', old("lname"), ['class' => 'form-control','placeholder' => 'Last Name']); !!}
                </div>
            </div>
            <div class='form-group row' bis_skin_checked='1'>
                {{-- email field --}}
                {!! Form::label('email', 'Email Id',['class' => 'col-sm-4 col-form-label']); !!}
                <div class='col-sm-8' bis_skin_checked='1'>
                    {!! Form::email('email', old("email"), ['class' => 'form-control','placeholder' => 'Email Id']); !!}
                </div>
            </div>
            <div class='form-group row' bis_skin_checked='1'>
                {{-- password field --}}
                {!! Form::label('password', 'Password',['class' => 'col-sm-4 col-form-label']); !!}
                <div class='col-sm-8' bis_skin_checked='1'>
                    {!! Form::password('password',['class' => 'form-control','placeholder' => 'Password']); !!}
                </div>
            </div>
            <div class='form-group row' bis_skin_checked='1'>
                {{-- confirm password field --}}
                {!! Form::label('password_confirmation', 'Confirm Password',['class' => 'col-sm-4 col-form-label']); !!}
                <div class='col-sm-8' bis_skin_checked='1'>
                    {!! Form::password('password_confirmation',['class' => 'form-control','placeholder' => 'Confirm Password']); !!}
                </div>
            </div>
                <button type='submit' class='btn btn-primary w-100'>Register</button>
            </fieldset>
        {!! Form::close() !!}
    </div>
</div>

@endsection