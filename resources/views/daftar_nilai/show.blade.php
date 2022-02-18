@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Nilai</div>
					<div class="card-body">
						<p>Nama: {{$daftarnilai->siswa->nama}}</p>
						<p>Mata Kuliah: {{$daftarnilai->mata_kuliah}}</p>
						<p>Nilai: {{$daftarnilai->nilai}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection