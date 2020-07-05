@extends('layouts.master')

@section('title', 'Buat Artikel')

@section('main-title', 'Buat Artikel Baru')

@section('content')

<form action="/artikel" method="POST">

	@csrf

	<div class="form-group">
		<label for="judul">Judul</label>
		<input type="text" class="form-control" id="judul" name="judul">
	</div>
	<div class="form-group">
		<label for="isi">Isi</label>
		<textarea class="form-control" id="isi" name="isi"></textarea>
	</div>
	<div class="form-group">
		<label for="tag">Tag*</label>
		<input type="text" class="form-control" id="tag" name="tag">
		<small id="tagHelp" class="form-text text-muted">* Gunakan spasi (" ") untuk memisahkan antar tag</small>
	</div>
	<button type="submit" class="btn btn-primary">Posting</button>
</form>

@endsection
