
@extends('layouts.layout')
@section('title') @parent::  Register @endsection
@section('header')
    @parent
@endsection
@section('content')

    <div class="continer">
        <form method="post" action="{{route('register.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" placeholder="name" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Email"  name="email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" class="form-control-file" id="avatar" name="avatar" >

            </div>

            <button type="submit" class="btn btn-primary">Register</button>

        </form>
    </div>
@endsection

