@extends('layouts.layout')

@section('title')@parent:: {{$title}} @endsection
@section('header')
    @parent
@endsection

@section('content')

  <div class="container">

    <div class="mt-5">
        <form   method="post" action="{{route('posts.store')}}">
            @csrf
            <div class="form-group" >
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is -invalid @enderror" id="title" placeholder="title" required name="title" value="{{old('title')}}">
                @error('title')
               <div class="innvalid-fedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="5" name="content" placeholder="Content" required>  {{old('content')}} </textarea>
                @error('content')
                <div class="innvalid-fedback">{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="rubric_id">Rubric</label>
                <select   class="form-control" id="rubric_id" name="rubric_id">
                    <option> Select rubric</option>
                    @foreach($rubrics AS $k=>$v)
                    <option value="{{$k}}" @if(old('rubric_id')==$k) selected  @endif> {{$v}} </option>
                    @endforeach

                </select>
                @error('rubric_id')
                <div class="innvalid-fedback">{{$message}}</div>
                @enderror

            </div>
       <button type="submit " class="btn btn-primary mt-t">Submit </button>
        </form>

    </div>
  </div>
@endsection
