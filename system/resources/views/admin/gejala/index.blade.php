@extends('admin.template.base')
@section('content')

<div class="card mt-3">
	<div class="card-body">
		<center>
			<h3>Data Gejala</h3>
		</center>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<button type="button" class="btn btn-success float-right mb-3 mt-3" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-plus"></i> Tambah Gejala
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Buat Data Gejala</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="{{url('admin/data-gejala/create')}}" method="post">
									@csrf
									<div class="form-group">
										<span>Kode Gejala</span>
										<input type="text" class="form-control" value="{{$kode_gejala}}" name="kode_gejala" readonly>
									</div>

									<div class="form-group">
										<span>Nama Gejala</span>
										<input type="text" class="form-control" name="nama_gejala">
									</div>

									<div class="form-group">
										<span>Keterangan Gejala</span>
										<textarea name="keterangan" id="" cols="30" rows="3" class="form-control"></textarea>
									</div>

									<div class="form-group">
										<button class="btn btn-primary float-right">SIMPAN</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<table class="table table-hover table-bordered">
					<thead class="bg-primary">
						<tr>
							<th class="text-white">No</th>
							<th class="text-white">Kode</th>
							<th class="text-white">Nama</th>
							<th class="text-white">Keterangan</th>
							<th class="text-white">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($list_gejala as $g)
						<tr>
							<td>{{$loop->iteration}}</td>
							<td class="bg-primary text-white">{{$g->kode_gejala}}</td>
							<td>{{ucwords($g->nama_gejala)}}</td>
							<td>{{$g->keterangan}}</td>
							<td>
								<div class="btn-group">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}">
									<i class="fa fa-edit"></i>
									</button>
									<a href="{{ url('admin/data-gejala/delete', $g->kode_gejala) }}" class="btn btn-danger">
										<i class="fa fa-trash"></i>
									</a>
								</div>
							</td>
						</tr>

						<!-- Modal Edit -->

						<!-- Modal -->
						<div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="{{ url('admin/data-gejala/edit', $g->gejala_id) }}" method="post">
											@csrf

											<div class="form-group">
												<span>Nama Gejala</span>
												<input type="text" class="form-control" name="nama_gejala" value="{{ $g->nama_gejala }}" required>
											</div>

											<div class="form-group">
												<span>Keterangan Gejala</span>
												<textarea name="keterangan" id="" cols="30" rows="3" class="form-control" required>{{ $g->keterangan }}</textarea>
											</div>

											<div class="form-group">
												<button class="btn btn-primary float-right">EDIT</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection