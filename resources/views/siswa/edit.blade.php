@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Edit Siswa</div>
					<div class="card-body">
						<form action="{{route('siswa.update', $siswa->id)}}" method="POST" enctype="multipart/form-data">
							@csrf
							@method('PUT')
							<div class="mb-3">
								<label>Nama</label>
								<input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" value="{{old('nama') ?? $siswa->nama}}">
								@error('nama')
								<span class="invalid-feedback" role="alert">
									<strong>{{$message}}</strong>
								</span>
								@enderror
							</div>
							<div class="mb-3">
								<label>Foto</label>
								<input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
								<label>Foto sebelumnya</label>
								<img src="{{asset('foto_siswa/'.$siswa->foto)}}" style="width:100px;">
							</div>
							<div class="mb-3">
								<label>Tanggal Lahir</label>
								<input type="date" name="tgl_lahir" class="form-control" value="{{$siswa->tgl_lahir}}">
							</div>
							<div class="mb-3">
								<label>Jenis Kelamin</label>
							</div>
							<div class="mb-3 form-check">
								<input type="radio" name="gender" class="form-check-input" value="Laki-laki" {{$siswa->gender == 'Laki-laki' ? 'checked' : ''}}>
								<label class="form-check-label">Laki-laki</label>
							</div>
							<div class="mb-3 form-check">
								<input type="radio" name="gender" class="form-check-input" value="Perempuan" {{$siswa->gender == 'Perempuan' ? 'checked' : ''}}>
								<label class="form-check-label">Perempuan</label>
							</div>
							<div class="mb-3">
								<label>No. HP</label>
								<input type="text" name="no_hp" class="form-control" placeholder="Masukkan No. HP" value="{{$siswa->no_hp}}">
							</div>
							<div class="mb-3">
								<label>Alamat</label>
								<textarea name="alamat" class="form-control" rows="4">{{$siswa->alamat}}</textarea>
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