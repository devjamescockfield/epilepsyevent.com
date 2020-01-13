@extends('layouts.admin-app')

@section('styles')
	<link href="{{ asset('css/pick-a-color-1.2.3.min.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="card shadow-lg">
					<div class="card-header">
						<div class='col-md-12'>

							<h1><i class='fa fa-key'></i> Add Role</h1>
							<hr>

							{{ Form::open(array('url' => 'roles')) }}

							<div class="row mx-auto">
								<div class="form-group col-md-4 mx-auto">
									{{ Form::label('name', 'Name') }}
									{{ Form::text('name', null, array('class' => 'form-control')) }}
								</div>

								<div class="form-group text-center mx-auto col-md-2">
									{{ Form::label('colour', 'Colour') }}
									{{ Form::text('colour', 'ffffff', array('class' => 'pick-a-color form-control colour')) }}
								</div>
							</div>

							<h5><b>Assign Permissions</b></h5>

							<div class='form-group'>
								@foreach ($permissions as $permission)
									{{ Form::checkbox('permissions[]',  $permission->id ) }}
									{{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

								@endforeach
							</div>

							{{ Form::submit('Add', array('class' => 'btn btn-secondary')) }}

							{{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="{{ asset('js/tinycolor-0.9.15.min.js') }}"></script>
	<script src="{{ asset('js/pick-a-color-1.2.3.min.js') }}"></script>
	<script>
        $( document ).ready(function(){
            $(".colour").pickAColor();
        });
	</script>
@endsection
