@extends('main-layout')

@section('content')

	<h1>Hello API</h1>
	<p>
		{{ $data or 'here must be default data from db' }}
		@if (isset($users))
			@foreach ($users as $user)
				<p>{{ $user->name }}</p>
			@endforeach
		@endif
		@if (isset($api))
			@foreach ($api as $user)
				<p>{{ $user->json }}</p>
			@endforeach
		@endif
		{{ $responseTest or 'response? wtf'}}
	</p>

@stop