@include('admin.template.section.assets')
<div class="card mt-3">
	<div class="card-body">
		<h2 class="text-center">HASIL DIAGNOSA </h2>
	</div>
</div>
<div class="card">
	<div class="card-body">
		<h3 class="block">PENYAKIT YANG DIALAMI <b style="text-transform: uppercase;margin: 0 0 12px 0;block">{{$hasil->nama_penyakit}}</b></h3> <hr>
		<div class="row mt-3">
			<div class="col-md-4 mt-3">
				<h3>Profil Diri</h3>	
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

			<div class="col-md-8">
				<h3>Gejala Yang Dirasakan</h3>	
				<br>
				@foreach ($gejala as $g)
				({{$loop->iteration}}).{{ $g->gejala->nama_gejala }}, 
				@endforeach
				<br> <br>
				<h3>Keterangan</h3>
				Berdasarkan gejala yang telah dipilih, kemungkinan besar anda terkena penyakit diabetes <b> </b>. 

				<br>
				<b class="text-priary">{{$hasil->keterangan}}</b>
			</div>
			
		</div>
		
	</div>
</div>

<script>
	window.print();
</script>