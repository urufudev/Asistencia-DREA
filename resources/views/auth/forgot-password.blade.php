{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

@extends('layouts.fullLayoutMaster')
{{-- page title --}}
@section('title','Restablecer Contraseña')
{{-- page scripts --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/authentication.css')}}">
@endsection

@section('content')
<!-- forgot password start -->
<section class="row flexbox-container">
  <div class="col-xl-7 col-md-9 col-10  px-0">
    <div class="card bg-authentication mb-0">
      <div class="row m-0">
        <!-- left section-forgot password -->
        <div class="col-md-6 col-12 px-0">
          <div class="card disable-rounded-right mb-0 p-2">
            <div class="card-header pb-1">
              <div class="card-title">
                <h4 class="text-center mb-2">¿Has olvidado tu contraseña?</h4>
              </div>
            </div>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
            <div class="card-body">
              <div class="text-muted text-center mb-2"><small>Ingrese el correo electrónico que utilizó
                cuando se registro y te enviaremos un enlace para restablecerlo.</small></div>
              <form class="mb-2">
                <div class="form-group mb-2">
                  <label class="text-bold-600" for="email">Correo Electrónico</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}" placeholder="Correo Electrónico">
                  @error('email')
                    <div class="text-danger fs-15 ">{{$message}}</div>
                  @enderror

                  @if (session('status'))

                  <div class="text-success fs-15 "> {{ session('status') }}</div>

                  @endif
                </div>
                
                  <button type="submit" class="btn btn-primary glow position-relative w-100">Restablecer Contraseña
                  <i id="icon-arrow" class="bx bx-right-arrow-alt"></i>
                </button>
              </form>

              <div class="divider mb-2">
                  <div class="divider-text"> - </div>
              </div>


              <div class="form-group d-flex justify-content-between align-items-center mb-2">
                <div class="text-left">
                    <div class="ml-3 ml-md-2 mr-1"><a href="{{route('login')}}"  class="card-link btn btn-outline-primary text-nowrap">Iniciar Sesión</a></div>
                </div>
                <div class="mr-3">
                  <a href="{{route('register')}}" class="card-link btn btn-outline-primary text-nowrap">Registrarse</a>
                </div>
              </div>

            </div>
            </form>
          </div>
        </div>
        <!-- right section image -->
        <div class="col-md-6 d-md-block d-none text-center align-self-center p-0">
          <img class="img-fluid" src="{{asset('images/backgrounds/back_login.png')}}" alt="branding logo" >
        </div>
      </div>
    </div>
  </div>
</section>
<!-- forgot password ends -->
@endsection

