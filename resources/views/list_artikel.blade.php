@extends('layouts.master')

@section('title', 'Artikel')

@section('main-title', 'Daftar Artikel')

@section('content')

<a href="/artikel/create" class="btn btn-primary">Buat Artikel</a><hr>

<table class="table table-bordered">
	<thead class="thead-dark">
		<tr>
			<th scope="col">No</th>
			<th scope="col">Judul</th>
			<th scope="col">Isi</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>
	<tbody>

		@foreach($data as $key => $value)

		<tr>
			<th scope="row">{{ $key + 1 }}</th>
			<td><?php echo substr($value->judul, 0, 30) . " ..."; ?></td>
			<td><?php echo substr($value->isi, 0, 50) . " ..."; ?></td>
			<td style="display: inline-block;">
				<a href="/artikel/{{ $value->id }}/show" class="btn btn-info" style="margin: 5px;">detail</a>
				<a href="/artikel/{{ $value->id }}/edit" class="btn btn-success" style="margin: 5px;">Edit</a>
				<form action="/artikel/{{ $value->id }}" method="POST">
					
					@csrf
					@method('DELETE')

					<button type="submit" onclick="return confirm('Anda ingin menghapus artikel?')" class="btn btn-danger" style="margin: 5px;">Hapus</button>

				</form>
			</td>
		</tr>

		@endforeach

		
	</tbody>
</table>

@endsection

@push('scripts')

<script>
	Swal.fire({
		title: 'Berhasil!',
		text: 'Memasangkan script sweet alert',
		icon: 'success',
		confirmButtonText: 'Cool'
	})
</script>

@endpush