@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<a href="{{route('siswa.create')}}" class="btn btn-primary">Input Siswa</a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th scope="col">No.</th>
									<th scope="col">Nama</th>
									<th scope="col">Foto</th>
									<th scope="col">Tanggal Lahir</th>
									<th scope="col">Alamat</th>
									<th scope="col">Aksi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($siswa as $sis)
								<tr>
									<th>{{$no++}}</th>
									<td>{{$sis->nama}}</td>
									<td><img src="foto_siswa/{{$sis->foto}}" style="width:100px;"></td>
									<td>{{$sis->tgl_lahir}}</td>
									<td>{{$sis->alamat}}</td>
									<td>
										<form action="{{route('siswa.delete', $sis->id)}}" method="POST">
											<div class="btn-group" role="group" aria-label="Basic example">
											  	<a href="{{route('siswa.show', $sis->id)}}" type="button" class="btn btn-primary">Show</a>
											  	<a href="{{route('siswa.edit', $sis->id)}}" class="btn btn-primary">Edit</a>
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