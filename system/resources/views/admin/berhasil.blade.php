@extends('admin.template.base')
@section('content')

<div class="card mt-3">
	<div class="card-body">
		<center>
			SELAMAT DATANG DI APLIKASI SISTEM PAKAR DIAGNOSA DIABETES
		</center>
	</div>
</div>
<div class="card">
	<div class="card-header">
		<center>
			<h3>Penyakit Ditemukan </h3>
		</center>

		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<h3>Keterangan</h3>
				Berdasarkan gejala yang telah dipilih, kemungkinan besar anda terkena penyakit diabetes <b> {{$hasil->nama_penyakit}}</b>. 

				<br>
				{{$hasil->keterangan}}
				 <br> <br>
				<h3>Solusi</h3>
				{{$hasil->solusi}}
			</div>
		</div>
	</div>
</div>
@endsection