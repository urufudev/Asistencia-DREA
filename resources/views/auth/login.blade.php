@extends('layouts.fullLayoutMaster')
{{-- title --}}
@section('title', 'Iniciar Sesión')
{{-- page scripts --}}
@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/authentication.css') }}">
@endsection

@section('content')
    <!-- login page start -->
    <section id="auth-login" class="row flexbox-container">
        <div class="col-xl-8 col-11">
            <div class="card bg-authentication mb-0">
                <div class="row m-0">
                    <!-- left section-login -->
                    <div class="col-md-6 col-12 px-0">
                        <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                            <div class="card-header pb-1">
                                <div class="card-title">
                                    <h3 class="text-center mb-2 text-bold-800">Iniciar Sesión</h3>
                                </div>

                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    @if (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{ session('error') }}
                                        </div>
                                    @endif


                                    {{-- form --}}
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">Dni</label>
                                            <input type="text" class="form-control " name="dni" maxlength="8"
                                                value="{{ old('dni') }}" autocomplete="off">
                                            @error('dni')
                                                <div class="text-danger fs-15 mt-1">{{ $message }}</div>
                                            @enderror

                                        </div>


                                        <div class="form-group">
                                            <label class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" name="password" required
                                                autocomplete="current-password">
                                            @error('password')
                                                <div class="text-danger fs-15 mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div
                                            class="form-group d-flex flex-md-row flex-column justify-content-between align-items-center">
                                            <div class="text-left">
                                                <div class="checkbox">
                                                    <input type="checkbox" class="checkbox-input" name="remember"
                                                        id="checkbox1">
                                                    <label for="checkbox1">Recuerdame</label>
                                                </div>
                                            </div>
                                            <div class="text-right">
                                                {{-- @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="btn btn-link box-shadow-0 px-0">¿Se te olvidó tu contraseña?</a>
                    @endif --}}
                                            </div>
                                        </div>

                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <button type="submit"
                                                    class="btn  btn-primary btn-block px-4 fs-18 font-weight-bold">Iniciar
                                                    Sesión
                                                    <i class="bx bx-exit"></i>
                                                </button>
                                            </div>

                                            @if (Route::has('password.request'))
                                                <div class="col-12 text-center mt-1">
                                                    <a href="{{ route('password.request') }}"
                                                        class="btn btn-link box-shadow-0 px-0">¿Se te olvidó tu
                                                        contraseña?</a>
                                                </div>
                                            @endif

                                        </div>

                                    </form>
                                    <hr>
                                    <div class="text-center pt-1">
                                        <div class="font-weight-normal fs-16">No tienes una cuenta <a
                                                class="btn-link font-weight-normal"
                                                href="{{ route('register') }}">Registrarse aquí</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right section image -->
                    <div class="col-md-6 d-md-block d-none text-center align-self-center p-0">
                        <div class="card-content">
                            <img class="img-fluid" src="{{ asset('images/backgrounds/back_login.png') }}"
                                alt="branding logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login page ends -->
@endsection
