@extends('admin.template.base')
@section('content')

<div class="card mt-3">
	<div class="card-body">
		<h2 class="text-center">HASIL DIAGNOSA </h2>
	</div>
</div>
<div class="card">
	<div class="card-header">
		<a href="{{url('admin/history',$detail->history_id)}}/cetak" target="_blank" class="btn btn-dark"><i class="fa fa-print"></i> Cetak</a>
		<div class="row mt-3">
			<div class="col-md-6 mt-3">
				<table class="table table-borderless table-hover">
					<tr>
						<th>Nama</th>
						<td>: {{strtoupper($detail->nama)}}</td>
					</tr>
					<tr>
						<th>Alamat</th>
						<td>: {{ucwords($detail->alamat)}}</td>
					</tr>
					<tr>
						<th>Jenis Kelamin</th>
						<td>: {{ucwords($detail->jenis_kelamin)}}</td>
					</tr>

					<tr>
						<th>Tanggal Lahir</th>
						<td>: {{ucwords($detail->tgl_lahir)}}</td>
					</tr>

					<tr>
						<th>Pekerjaan</th>
						<td>: {{ucwords($detail->pekerjaan)}}</td>
					</tr>
					<tr>
						<th>Tgl. Cek</th>
						<td>: {{ucwords($detail->created_at)}}</td>
					</tr>
				</table>
			</div>
			
		</div>
		<div class="row mt-3">
			<div class="col-md-6">
				<h3>GEJALA YANG DIRASAKAN</h3>	
				<br>
				<table class="table">
					<tr>
						<th>Kode</th>
						<th>Gejala</th>
					</tr>
					@foreach ($gejala as $g)
						<tr>
							<td>{{ $g->gejala->kode_gejala }}</td>
							<td>{{ $g->gejala->nama_gejala }}</td>
						</tr>
					@endforeach
				</table>
				
			</div>
			<br>
			<div class="col-md-12 mt-t">
				<div class="d-flex align-items-center">
					<h3 class="block">PENYAKIT YANG DIALAMI <b style="text-transform: uppercase;margin: 0 0 12px 0;block">{{$hasil->nama_penyakit}}</b></h3>
			
					
				</div>
				<br>
				<h3>Keterangan</h3>
				Berdasarkan gejala yang telah dipilih, kemungkinan besar anda terkena penyakit diabetes <b> </b>. 

				<br>
				<b class="text-priary">{{$hasil->keterangan}}</b>
				
			</div>
		</div>
	</div>
</div>
@endsection