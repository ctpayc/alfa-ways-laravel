@extends('main-layout')


@section('leftside')
	{!! Widget::LeftSideBar() !!}
@endsection

@section('content')
	{{ $content or 'default $content' }}
@endsection