@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<a href="{{route('daftar_nilai.create')}}" class="btn btn-primary">Input Nilai</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Siswa</th>
									<th scope="col">Mata Kuliah</th>
									<th scope="col">Nilai</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($daftarnilai as $nilai)
								<tr>
									<td scope="col">{{$no++}}</td>
									<td>{{$nilai->siswa->nama}}</td>
									<td>{{$nilai->mata_kuliah}}</td>
									<td>{{$nilai->nilai}}</td>
									<td>
										<form action="{{route('daftar_nilai.destroy', $nilai->id)}}" method="POST">
											<div class="btn-group" role="group" aria-label="Basic example">
											  	<a href="{{route('daftar_nilai.show', $nilai->id)}}" type="button" class="btn btn-primary">Show</a>
											  	<a href="{{route('daftar_nilai.edit', $nilai->id)}}" class="btn btn-primary">Edit</a>
											  	@csrf
											  	@method('DELETE')
											  	<button type="submit" class="btn btn-primary" onclick="return confirm('Apakah anda ingin menghapusnya?')">Delete</button>
											</div>
										</form>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection