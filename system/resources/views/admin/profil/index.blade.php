@extends('admin.template.base')
@section('content')

<div class="card mt-3">
	<div class="card-body">
		<center>
			<h3>Profil Akun</h3>
		</center>
	</div>
</div>

<div class="card mt-3">
	<div class="card-body">
		<h3>Ganti Password </h3>
		<form action="{{url('admin/ganti-password')}}" method="post">
			@csrf
			<input type="text" class="form-control" name="new" placeholder="Pasword Baru" required>
			<input type="text" class="form-control mt-3" name="old" placeholder="Konfirmasi Pasword Baru" required>

			<button class="btn btn-primary mt-3">Ganti Password</button>
		</form>
	</div>
</div>


@endsection