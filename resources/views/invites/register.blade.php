@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">{{ trans('messages.register') }}</div>
				<div class="panel-body">




					<form class="form-horizontal" role="form" method="POST" action="{{ action('InviteController@inviteRegister', [$group->id, $token]) }}">



						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('messages.name') }}</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('messages.email') }}</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="@if (isset($email)) {{$email}}@else{{ old('email')}}@endif">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('messages.password') }}</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">{{ trans('messages.confirm_password') }}</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									{{ trans('messages.register') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection