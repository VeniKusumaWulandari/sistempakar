@extends('admin.template.base')
@section('content')

<div class="card mt-3">
	<div class="card-body">
		<center>
			<h3>History Diagnosa</h3>
		</center>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				

			</div>
			<div class="col-md-12">
				<table class="table table-hover table-bordered">
					<thead class="bg-primary">
						<tr>
							<th class="text-white">No</th>
							<th class="text-white">Nama Pasien</th>
							<th class="text-white">Hasil Penyakit</th>
							<th class="text-white">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($list_history as $s)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{strtoupper($s->nama)}}</td>
							<td>{{$s->id_penyakit}}</td>
							<td>
								<a href="{{url('admin/history',$s->history_id)}}/show" class="btn btn-dark">Lihat Hasil Diagnosa</a>
								<a href="{{url('admin/history',$s->history_id)}}/delete" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
						@endforeach
					</tbody>
					<tfoot class="bg-primary">
						<tr>
							<th class="text-white">No</th>
							<th class="text-white">Nama Pasien</th>
							<th class="text-white">Hasil Penyakit</th>
							<th class="text-white">Aksi</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection