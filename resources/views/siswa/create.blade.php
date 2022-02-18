@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Input Siswa</div>
					<div class="card-body">
						<form action="{{route('siswa.store')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="mb-3">
								<label>Nama</label>
								<input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Anda" value="{{old('nama')}}">
								@error('nama')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
								@enderror
							</div>
							<div class="mb-3">
								<label>Foto</label>
								<input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
								@error('foto')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
								@enderror
							</div>
							<div class="mb-3">
								<label>Tanggal Lahir</label>
								<input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{old('tgl_lahir')}}">
								@error('tgl_lahir')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
								@enderror
							</div>
							<div class="mb-3">
								<label>Jenis Kelamin</label>
							</div>
							<div class="mb-3 form-check">
								<input type="radio" name="gender" class="form-check-input" value="Laki-laki" checked>
								<label class="form-check-label">Laki-laki</label>
							</div>
							<div class="mb-3 form-check">
								<input type="radio" name="gender" class="form-check-input" value="Perempuan">
								<label class="form-check-label">Perempuan</label>
							</div>
							<div class="mb-3">
								<label>No. HP</label>
								<input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Masukkan No. HP" value="{{old('no_hp')}}">
								@error('no_hp')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
								@enderror
							</div>
							<div class="mb-3">
								<label>Alamat</label>
								<textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="4">{{old('alamat')}}</textarea>
								@error('alamat')
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