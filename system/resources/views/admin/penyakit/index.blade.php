@extends('admin.template.base')
@section('content')
<style>
	td{
		vertical-align: top !important;
	}
</style>
<div class="card mt-3">
	<div class="card-body">
		<center>
			<h3>Data Penyakit</h3>
		</center>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-hover table-bordered">
					<thead class="bg-primary">
						<tr>
							<th class="text-white">No</th>
							<th class="text-white">Kode Penyakit</th>
							<th class="text-white">Nama Penyakit</th>
						</tr>
					</thead>
					<tbody>
						@foreach($list_penyakit as $p)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$p->kode_penyakit}}</td>
							<td>{{ucwords($p->nama_penyakit)}}</td>
						
						</tr>
						@endforeach
						
					</tbody>
					
				</table>
			</div>
		</div>
	</div>
</div>


@endsection