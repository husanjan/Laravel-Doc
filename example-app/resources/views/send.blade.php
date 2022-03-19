
@extends('layouts.layout')
@section('title') @parent::  Send Mail @endsection
@section('header')
    @parent
@endsection
@section('content')

   <div class="continer">
       <form method="post" action="/send">
           @csrf

           <div class="form-group">
               <label for="Name">Name</label>
               <input type="text" class="form-control" id="Name" placeholder="name">
           </div>
           <div class="form-group">
               <label for="email">email</label>
               <input type="email" class="form-control" id="email" placeholder="name@example.com">
           </div>
           <div class="form-group">
               <label for="email">Your Message</label>
               <textarea name="text" class="form-control" id="text" cols="3" rows="5"></textarea>
           </div>
            <button type="submit" class="btn btn-primary">Send</button>

       </form>
   </div>
@endsection

