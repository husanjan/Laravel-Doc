
@extends('layouts.layout')
@section('title') @parent::  Login @endsection
@section('header')
    @parent
@endsection
@section('content')

    <div class="continer">
        <form method="post" action="{{route('login.create')}}">
            @csrf


            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Email"  name="email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>


            <button type="submit" class="btn btn-primary">Register</button>

        </form>
    </div>
@endsection

