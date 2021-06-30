@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Configuración de Perfil')
{{-- vendor styles --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/forms/select/select2.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
@endsection
{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/forms/validation/form-validation.css')}}">
@endsection

@section('content')
<!-- account setting page start -->
<section id="page-account-settings">
  <div class="row">
    <div class="col-12">
      <div class="row">
        <!-- left menu section -->
        <div class="col-md-3 mb-2 mb-md-0 pills-stacked">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center active" id="account-pill-general" data-toggle="pill"
                    href="#account-vertical-general" aria-expanded="true">
                    <i class="bx bx-cog"></i>
                    <span>Datos Personales</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center " id="account-pill-info" data-toggle="pill"
                    href="#account-vertical-info" aria-expanded="false">
                    <i class="bx bx-info-circle"></i>
                    <span>Datos Laborales</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center " id="account-pill-password" data-toggle="pill"
                    href="#account-vertical-password" aria-expanded="false">
                    <i class="bx bx-lock"></i>
                    <span>Cambiar Contraseña</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" id="account-pill-social" data-toggle="pill"
                    href="#account-vertical-social" aria-expanded="false">
                    <i class="bx bxs-map"></i>
                    <span>Dirección</span>
                </a>
            </li>

          </ul>
        </div>
        <!-- right content section -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                        aria-labelledby="account-pill-general" aria-expanded="true">

                        {!! Form::model($user,['route'=>['account-setting.updateInfo', $user],'method'=>'PUT']) !!}
                                
                        @include('profile.partials.personal-info')
    
                        {!! Form::close() !!}
                        
                    </div>

                    <div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
                        aria-labelledby="account-pill-info" aria-expanded="false">
                        {!! Form::model($user,['route'=>['account-setting.updateLaboralInfo', $user],'method'=>'PUT']) !!}
                            @include('profile.partials.laboral-info')
                            {!! Form::close() !!}
                    </div>  
                    <div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
                        aria-labelledby="account-pill-password" aria-expanded="false">

                        {!! Form::model($user,['route'=>['account-setting.updatePassword', $user],'method'=>'PUT']) !!}
                                
                        @include('profile.partials.password')
    
                        {!! Form::close() !!}      
                        
    
                    
                    </div>
                    
                    <div class="tab-pane fade " id="account-vertical-social" role="tabpanel"
                        aria-labelledby="account-pill-social" aria-expanded="false">
                        {!! Form::model($user,['route'=>['account-setting.updateAddress', $user],'method'=>'PUT']) !!}
                                
                        @include('profile.partials.address')
    
                        {!! Form::close() !!} 
                    </div>

                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- account setting page ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
<script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
<script src="{{asset('vendors/js/file-uploaders/dropzone.min.js')}}"></script>
@endsection

@section('page-scripts')
<script src="{{asset('js/scripts/pages/page-account-settings.js')}}"></script>
@endsection
