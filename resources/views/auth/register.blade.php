<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Language" content="en">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>M7 UF4 MiniProjecte API</title>
	<meta name="viewport"
		content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
	<meta name="description" content="This is an example dashboard created using build-in elements and components.">
	<meta name="msapplication-tap-highlight" content="no">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Registrat') }}</div>

				<div class="card-body">
					<form method="POST" action="{{ route('register') }}">
						@csrf

						<div class="form-group row">
							<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contrasenya') }}</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group row">
							<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							</div>
						</div>		

						<div class="form-group row mb-0">
							<div class="col-md-6 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Registrarse') }}
								</button>
							</div>
						</div>

						@if (Route::has('login'))
							<a class="btn btn-link" href="{{ route('login') }}">
								{{ __('Ya tienes cuenta?') }}
							</a>
						@endif
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

<script>

$('#country').on("change", function() {
	var $country = $('#country').val();
	$.ajax({
		type: 'GET',
		url: "https://covid-19-statistics.p.rapidapi.com/provinces?iso="+$country,
		headers: {
			"x-rapidapi-key": "d58ecd646amsh9dbcd02744d1812p1c95d2jsn9a71eca5e268",
			"x-rapidapi-host": "covid-19-statistics.p.rapidapi.com"
		}, success: function(res) {
			$('#province').html("");

			for(const province of res['data']) {
				$('#province').append("<option value='"+province['province']+"'>"+province['province']+"</option>");
			}
			$('#province option:first-child').remove();
			$('#province option:last-child').remove();
			$('#province').prepend("<option disabled selected>Elige una provincia</option>");
		}
	})
});

</script>

</html>