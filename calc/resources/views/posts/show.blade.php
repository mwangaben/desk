@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

{{-- Display Posts --}}
    <h2 class="blog-post-title">
        {{ $post->title }}
    </h2>
    <p class="blog-post-meta">
        {{ $post->created_at->toFormattedDateString() }}
        <a href="#">
            Mark
        </a>
    </p>
    {{ $post->body }}
    <hr>

    {{-- Display Comments --}}
        <div class="comments">
            <ul class="list-group">
                <h3 class="blog-post-meta">
                    Comments:
                </h3>
                @foreach ($post->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}
                    <a href="">{{ $comment->user->name }}</a>
                    </strong>
                    {{ $comment->body }}
                </li>
                @endforeach
            </ul>
        </div>
    </hr>

    {{-- add a Comment --}}
    <div class="card">
        <div class="card-block">
            <form action="/posts/{{ $post->id }}/comments" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" placeholder="Your Comment Here" class="form-control" required>
                    </textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">
                        Add Comment
                    </button>
                </div>

                {{-- Display Errors if any --}}
                @include('layouts.errors')
            </form>
        </div>
    </div>
</div>
@stop
