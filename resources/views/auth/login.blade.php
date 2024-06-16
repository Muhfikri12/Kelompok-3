@extends('layouts.auth')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="mb-10 text-center">
                            <img src="{{ asset('img/jabar.png') }}" alt="Image" style="max-width: 400px; max-height: 200px">
                        </div>
                        <div class="mb-10 mb-lg-15">
                            <h3 class="font-weight-boldest"><small><b>CMS</b> Content Management Sistem</small></h3>
                            <p class="text-muted font-weight-bold">{{ __('Masuk untuk melanjutkan') }}</p>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger border-left-danger" role="alert">
                            <ul class="pl-4 my-2">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}" class="user">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" name="email" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" name="password" placeholder="{{ __('Password') }}" required>
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">{{ __('Ingat Saya') }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Masuk') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection

