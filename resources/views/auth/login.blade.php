{{-- <x-guest-layout> --}}
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="card-body">

            <x-jet-validation-errors class="mb-3 rounded-0" />

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }}" type="email"
                                 name="email" :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                                 name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex justify-content-end align-items-baseline">
                        @if (Route::has('password.request'))
                            <a class="text-muted mr-3" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-jet-button>
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </div>
            </form>
        </div>
    </x-jet-authentication-card> --}}
{{-- </x-guest-layout> --}}

@extends('layouts.member')
{{-- ------------------------------------------------------------------------------------------------------------------------------------ --}}
    @section('content')

	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">أهلًا بعودتك!</h1>
							<p class="lead">
								قم بتسجيل الدخول إلى حسابك للاستمرار
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									{{-- <div class="text-center">
										<img src="img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div> --}}
									<form method="POST" action="{{ route('login') }}" enctype="multipart/form-data" style="text-align: right">
                                        @csrf
										<div class="mb-3">
											<label class="form-label">الإيميل</label>
											<input class="form-control form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="{{ __('الإيميل') }}" value="{{ old('email') }}" required autofocus/>
                                            <x-jet-input-error for="email"></x-jet-input-error>
                                        </div>
										<div class="mb-3">
											<label class="form-label">الباسوورد</label>
											<input class="form-control form-control-lg {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="{{ __('كلمة السر') }}" required/>
											<small>
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">{{ __('نسيت كلمة السر؟') }}</a>
                                                    <br><a href="{{ route('register') }}">{{ __('لست مسجلًا؟') }}</a>
                                                @endif
                                            </small>
                                            <x-jet-input-error for="password"></x-jet-input-error>
										</div>
										<div>
											<label class="form-check">
                                                <input class="form-check-input" type="checkbox" value="remember-me" id="remember_me" name="remember" checked>
                                                <span class="form-check-label m-r-20">
                                                    {{ __('تذكرني') }}
                                                </span>
                                            </label>
										</div>
										<div class="text-center mt-3">
											{{-- <a href="{{ route('login') }}" class="btn btn-lg btn-primary">{{ __('Log in') }}</a> --}}
											<button type="submit" class="btn btn-lg btn-primary">{{ __('دخول') }}</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>
    @endsection
