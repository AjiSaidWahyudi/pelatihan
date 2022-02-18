@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">Siswa</div>
					<div class="card-body">
						<p>Nama: {{$siswa->nama}}</p>
						<p>Tanggal Lahir: {{$siswa->tgl_lahir}}</p>
						<p>Jenis Kelamin: {{$siswa->gender}}</p>
						<p>No. HP: {{$siswa->no_hp}}</p>
						<p>Alamat: {{$siswa->alamat}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection