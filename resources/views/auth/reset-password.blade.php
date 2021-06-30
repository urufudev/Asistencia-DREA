{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block font-medium text-sm text-gray-700">
                    {{ __('Password') }}
                </label>

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="block font-medium text-sm text-gray-700">
                    {{ __('Confirm Password') }}
                </label>

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
 --}}

 @extends('layouts.fullLayoutMaster')
{{-- page title --}}
@section('title','Reset Password')
{{-- page scripts --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/authentication.css')}}">
@endsection

@section('content')
<!-- reset password start -->
<section class="row flexbox-container">
    <div class="col-xl-7 col-10">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- left section-login -->
                <div class="col-md-6 col-12 px-0">
                    <div class="card disable-rounded-right d-flex justify-content-center mb-0 p-2 h-100">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="text-center mb-2">Restablece su contraseña</h4>
                            </div>


                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="form-group">
                                    <label class="text-bold-600" >Correo Electrónico</label>
                                    <input class="form-control" type="email" name="email" value="{{old('email',$request->email)}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label class="text-bold-600" for="password">Nueva contraseña</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" 
                                        placeholder="Nueva contraseña">
                                        @error('password')
                                            <div class="text-danger fs-15 ">{{$message}}</div>
                                        @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label class="text-bold-600" for="confirm-password">Confirme su nueva contraseña</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="confirm-password" name="password_confirmation"
                                        placeholder="Confirme su nueva contraseña">
                                        @error('password_confirmation')
                                            <div class="text-danger fs-15 ">{{$message}}</div>
                                        @enderror
                                    
                                    </div>
                                <button type="submit" class="btn btn-primary glow position-relative w-100">Restablecer mi contraseña<i id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- right section image -->
                <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                    <img class="img-fluid" src="{{asset('images/backgrounds/back_login.png')}}"
                        alt="branding logo">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- reset password ends -->
@endsection
