@extends('layouts.master')

@section('content')
<div class="col-sm-8">
    @foreach ($posts as $post)
			@include('layouts.post')
		@endforeach
</div>
@stop
