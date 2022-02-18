@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Input Siswa</div>
					<div class="card-body">
						<form action="{{route('daftar_nilai.update', $daftarnilai->id)}}" method="POST">
							@csrf
							@method('PUT')
							<div class="mb-3">
								<label>Nama Siswa</label>
								<select class="form-select" name="siswa_id">
									@foreach($siswa as $sis)
									<option value="{{$sis->id}}" @if ($sis->id === $daftarnilai->siswa_id) selected @endif>{{$sis->nama}}</option>
									@endforeach
								</select>
							</div>
							<div class="mb-3">
								<label>Mata Kuliah</label>
								<select class="form-select" name="mata_kuliah">
									<option value="Jarkom" @if ($daftarnilai->mata_kuliah === 'Jarkom') selected @endif>Jaringan Komputer</option>
									<option value="Web" @if ($daftarnilai->mata_kuliah === 'Web') selected @endif>Pemrograman Web</option>
									<option value="Mobile" @if ($daftarnilai->mata_kuliah === 'Mobile') selected @endif>Pemrograman Mobile</option>
								</select>
							</div>
							<div class="mb-3">
								<label>Nilai</label>
								<input type="text" name="nilai" class="form-control @error('nilai') is-invalid @enderror" placeholder="Nilai" value="{{old('nilai') ?? $daftarnilai->nilai}}">
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