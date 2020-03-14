@extends('layouts.master')

@section('content')

<div class="col-lg-12 text-center">
	<h2>{{$post->name}}</h2><br>
	<p>{{$post->details}}</p><br>
	<hr style="border-width: 10px;border-color: gray">

	@forelse($comment as $c)

	<p><b>
		@if($c->user_id == null)
		Admin
		@else
		{{\App\User::find($c->user_id)->name}}
		@endif
		:</b>{{$c->comment}}</p>

	@if(Auth::id() == $c->user_id)
		<a href="?edit={{$c->id}}">edit</a>
	@endif

	@empty

	@endforelse
	@if(isset($_GET['edit']))

	<form action="{{ route('user.post.edit',[$_GET['edit'],$post->id]) }}" method="POST">
		{{csrf_field()}}

		<textarea name="comment">{{ \App\Comment::find($_GET['edit'])->comment }}</textarea><br>
		<input type="submit" name="submit" value="edit comment">
		
	</form>

	@else
	<form action="{{ route('user.post.comment',$post->id) }}" method="POST">
		{{csrf_field()}}

		<textarea name="comment"></textarea><br>
		<input type="submit" name="submit" value="comment">
		
	</form>
	@endif
</div>

@endsection
