@extends('layouts.master')

@section('title', 'Edit Artikel')

@section('main-title', 'Edit Artikel')

@section('content')

<form action="/artikel/{{ $data->id }}" method="POST">

	@csrf

	@method('PUT')

	<div class="form-group">
		<label for="judul">Judul</label>
		<input type="text" class="form-control" id="judul" name="judul" value="{{ $data->judul }}">
	</div>
	<div class="form-group">
		<label for="isi">Isi</label>
		<textarea class="form-control" id="isi" name="isi">{{ $data->isi }}</textarea>
	</div>
	<div class="form-group">
		<label for="tag">Tag*</label>
		<input type="text" class="form-control" id="tag" name="tag" value="{{ $data->tag }}">
		<small id="tagHelp" class="form-text text-muted">* Gunakan spasi (" ") untuk memisahkan antar tag</small>
	</div>
	<button type="submit" class="btn btn-primary">Posting</button>
</form>

@endsection