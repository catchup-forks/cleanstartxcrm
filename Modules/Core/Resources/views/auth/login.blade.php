@extends('core::layouts.authentication')


@section('content')


<div class="app-body">


	<main class="main">
		<div class="container-fluid pt-3">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div class="card-group">
							<div class="card p-4">
								<div class="card-body">
									<h1>Login</h1>
									<form class="form-horizontal" method="POST" action="{{ route('postlogin') }}">
										{{ csrf_field() }}

										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<label for="email" class="col-md-4 control-label">E-Mail Address</label>

											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="icon-user"></i>
													</span>
												</div>
												<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
												 autofocus>

												@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
												@endif
											</div>
										</div>

										<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
											<label for="password" class="col-md-4 control-label">Password</label>

											<div class="input-group mb-4">


												<div class="input-group-prepend">
													<span class="input-group-text">
														<i class="icon-lock"></i>
													</span>
												</div>

												<input class="form-control" type="password" id="Password" name="password" required>

												@if ($errors->has('password'))
												<span class="help-block">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
												@endif
											</div><!-- /input-group -->
										</div>

										<div class="form-group">
											<div class="col-6">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
													</label>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="col-6">
												<button class="btn btn-primary px-4" type="submit">
													Login
												</button>

												<a class="btn btn-link" href="{{ route('password.request') }}">
													Forgot Your Password?
												</a>
											</div>
										</div>
									</form>

								</div><!-- /card-body -->
							</div><!-- /p4 -->
							<div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
								<div class="card-body text-center">
									<div>
										<h2>Sign up</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua.</p>
										<button class="btn btn-primary active mt-3" type="button">Register Now!</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</main>

</div>

@endsection