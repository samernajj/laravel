@extends('layouts.layout')
@section('contents')

<form action='/post' method='POST'>
    @include('layouts.errors') 
    {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name='title'>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name='body' id='body' class="form-control"> </textarea>
  </div>
  <button type="publish" class="btn btn-primary">Submit</button>
</form>

@endsection