@extends('layouts.master')

@section('title', 'Detail')

@section('content')

<h3>{{ $data->judul }}</h3>
<h6>Slug : {{ $data->slug }}</h6>

<hr>

<p>
	{{ $data->isi }}
</p>

<hr>

@foreach($tag as $key)

	<a href="#" class="btn btn-success">{{ $key }}</a>

@endforeach

@endsection