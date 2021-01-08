
@extends('layouts.admin')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		<h2 class="display-4">WELCOME</h2>
		<p class="lead">Who do you want to <a class="btn btn-md btn-success" href="/admin/add">Add</a> today?</p>
	</div>

	<div class=" container px-5">
		<table class="table table-striped table-bordered">
			<thead>
				<tr class="text-white" style="background-image: linear-gradient(to right, #00b8f0 , #009d56, #ffcc29);">
					<th>No</th>
					<th>Username</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				@foreach($userdata as $data)
				<tr>

				<td>{{ $loop->iteration }}</td>
				<td>{{ $data->username }}</td>
				<td>{{ $data->name }}</td>

				<td>
				<a href="/admin/edit/{{ $data->userId }}"><i class="fa fa-fw fa-edit"></i>Edit |</a>
				<a href="/admin/delete/{{ $data->userId }}" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
				</td>

				</tr>
				@endforeach

			</tbody>
		</table>
	</div>

@endsection
