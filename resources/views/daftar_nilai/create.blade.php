@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Input Siswa</div>
					<div class="card-body">
						<form action="{{route('daftar_nilai.store')}}" method="POST">
							@csrf
							<div class="mb-3">
								<label>Nama Siswa</label>
								<select class="form-select" name="siswa_id">
									@foreach($siswa as $sis)
									<option value="{{$sis->id}}">{{$sis->nama}}</option>
									@endforeach
								</select>
							</div>
							<div class="mb-3">
								<label>Mata Kuliah</label>
								<select class="form-select" name="mata_kuliah">
									<option value="Jarkom">Jaringan Komputer</option>
									<option value="Web">Pemrograman Web</option>
									<option value="Mobile">Pemrograman Mobile</option>
								</select>
							</div>
							<div class="mb-3">
								<label>Nilai</label>
								<input type="text" name="nilai" class="form-control @error('nilai') is-invalid @enderror" placeholder="Nilai" value="{{old('nilai')}}">
								@error('nilai')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
								@enderror
							</div>
							<div class="mb-3">
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection