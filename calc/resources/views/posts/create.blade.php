@extends('layouts.master')

@section('content')
<div class="col-sm-8">
<form action="/posts" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="title">
            Title:
        </label>
        <input class="form-control" placeholder="The title" id="title" name="title" type="text">
        </input>
    </div>
    <div class="form-group">
        <label for="body">
            Body:
        </label>
        <textarea class="form-control" id="body" name="body">
        </textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Publish
        </button>
    </div>
    @include('layouts.errors')
</form>
</div>
@stop
