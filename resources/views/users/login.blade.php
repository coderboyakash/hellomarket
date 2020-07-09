@extends('layouts.app')

@section('body')
    <div class="login-box align-middle p-4 rounded ml-auto mr-auto display-block">
        {!! Form::open(['method'=>'POST', 'action'=>'UsersController@store', 'files' => true]) !!}
            <div class="form-group">
                <label for="email">Username</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="passwd">Password</label>
                <input type="password" name="passwd" class="form-control" id="passwd">
            </div>
                <button type="submit" class="btn">Login</button>
        </form>
    </div>
@endsection