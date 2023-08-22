@extends('admin.template.base')
@section('content')

<div class="card mt-3">
	<div class="card-body">
		<center>
			SELAMAT DATANG DI APLIKASI SISTEM PAKAR DIAGNOSA DIABETES
		</center>
	</div>
</div>


<form action="{{url('admin/cek')}}" method="post">
	@csrf
	<div class="row">
		

		<div class="col-md-4">
			<div class="card">
				<div class="card-header bg-primary text-white">
					<center>
						<h3 class="text-white">Biodata Diri</h3>
					</center>
				</div>
				<div class="card-body">
					<div class="form-group">
						<span>Nama Pasien</span>
						<input type="text" class="form-control @error('nama') invalid @enderror" placeholder="Nama ..." name="nama">
						@error('nama')
							<span class="text-danger">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group">
						<span>Alamat Pasien</span>
						<input type="text" class="form-control" placeholder="Alamat ..." name="alamat">
					</div>

					<div class="form-group">
						<span>Jenis Kelamin</span>
						<select name="jenis_kelamin" class="form-control" id="">
							<option value="">--- Pilih ---</option>
							<option value="Laki-laki">Laki-laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</div>
					<div class="form-group">
						<span>Tgl. Lahir</span>
						<input type="date" class="form-control" name="tgl_lahir">
					</div>

					<div class="form-group">
						<span>Pekerjaan</span>
						<input type="text" class="form-control" placeholder="Pekerjaan ...." name="pekerjaan">
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="card">
				<div class="card-header bg-primary text-white">
					<center>
						<h3 class="text-white">Gejala Yang Dialami</h3>
						<p class="text-white">Ceklis pada gejala yang dirasakan !</p>
					</center>
				</div>
				<div class="card-body">
					

					<table class="table table-hover">
						<tr class="bg-primary text-white">
							<td>Kode</td>
							<td>Gejala</td>
							<td>Pilih</td>
						</tr>
						@foreach($list_gejala as $g)
						<tr>
							<td>{{$g->kode_gejala}}</td>
							<td>{{ucwords($g->nama_gejala)}}</td>
							<td>
								<input type="checkbox" name="kode_gejala[]" value="{{$g->kode_gejala}}">
							</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>

		<div class="col-md-12 mt-3">
			<button class="btn btn-primary btn-block" type="submit">DIAGNOSA SEKARANG</button>
		</div>
	</div>
</form>

@endsection