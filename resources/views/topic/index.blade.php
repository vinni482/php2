@extends('layout.master')

@section('menu')
   @parent
@endsection

@section('content')
<div class='row'>
	<div class="col-md-3 dleft">
		{!! Form::open(['action'=>'TopicController@search']) !!}
		{!! Form::text('search','',['class'=>'form-control']) !!}
			<button class="btn btn-success" type="submit">Search</button>
		{!! Form::close() !!}
		<ul>
			@foreach($topics as $t)
			<li>
				<a href="{{url('topic/'.$t->id)}}">
					{{$t->topicname}}
				</a>
			</li>
			@endforeach
		</ul>
	</div>
	<div class="col-md-9 dright">
		@if($id != 0)
			@foreach($blocks as $b)
				<div>
					<h2>{{$b->title}}</h2>
					@if($b->imagePath != "")
						<a href="{{url($b->imagePath)}}" target="_blank" class="wrap-image">
							<img src="{{asset($b->imagePath)}}" height="100px" alt=""/>
						</a>
					@endif
					<pre class="pre__text">{{$b->content}}</pre>
				</div>
			@endforeach
		@endif
	</div>
</div>
@endsection
