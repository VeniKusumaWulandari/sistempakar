@foreach(['success', 'warning', 'danger'] as $status)
	@if (session($status))
		<div class="alert alert-{{$status}} mt-3 alert-dismissable custom-{{$status}}-box">
			<a href="#" class="close" data-dismiss='alert' aria-label='close'></a>
			<strong> {{session($status)}} </strong>
		</div>
	@endif
@endforeach