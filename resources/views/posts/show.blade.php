@extends('layouts.layout')
@section('contents')

<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/post/{{$post->id}}" >{{$post->title}}</a>
    </h2>
        <ul>
            @foreach($post->tags as $tag)
            <li>
                <a href="/post/tag/{{$tag->name}}">{{$tag->name}}</a>
            </li>
            @endforeach
        </ul>
    
    <p class="blog-post-meta">
        {{$post->user->name}} on
        {{$post->created_at->toFormattedDateString()}}
    </p>
    {{$post->body}}
</div><!-- /.blog-post -->
<hr>

@foreach($post->comments as $comments)
<p>{{$comments->body}}</p>
<hr>
@endforeach

<hr>
<hr>
<form action='/post/{{$post->id}}/comments' method='POST'>
    @include('layouts.errors') 
    {{ csrf_field() }}
  <div class="form-group">
    <label for="body">Comment</label>
    <textarea name='body' id='body' class="form-control"> </textarea>
  </div>
  <button type="publish" class="btn btn-primary">Submit</button>
</form>
@endsection

