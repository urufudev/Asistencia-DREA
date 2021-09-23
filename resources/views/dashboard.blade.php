

@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Dashboard')
{{-- vendor scripts --}}
@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">

@endsection

{{-- page styles --}}
@section('page-styles')
{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/pages/widgets.css')}}"> --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-ecommerce.css')}}">
@endsection

@section('content')
<!-- Widgets Statistics start -->
<section id="widgets-Statistics">
  <div class="row">
    <div class="col-12 mt-1 mb-2 ">
      <h2 class="text-capitalize">Hola {{ Auth::user()->name ?? 'Invitado'}} 😄,</h2>
      <h1>Bienvenido de nuevo 👋</h1>
      <hr>
    </div>
  </div>
  <div class="row d-none d-md-flex d-xl-flex">
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
            <i class="bx bx-group font-medium-5"></i>
          </div>
          <p class="text-muted mb-0 line-ellipsis">Trabajadores</p>
          <h2 class="mb-0">{{$users->count()}}</h2>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
            <i class="bx bx-building-house font-medium-5"></i>
          </div>
          <p class="text-muted mb-0 line-ellipsis">Oficinas</p>
          <h2 class="mb-0">{{$offices->count()}}</h2>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
            <i class="bx bx-sitemap font-medium-5"></i>
          </div>
          <p class="text-muted mb-0 line-ellipsis">Cargos</p>
          <h2 class="mb-0">{{$positions->count()}}</h2>
        </div>
      </div>
    </div>

    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="badge-circle badge-circle-lg badge-circle-light-primary mx-auto my-1">
            <i class="bx bx-briefcase-alt-2 font-medium-5"></i>
          </div>
          <p class="text-muted mb-0 line-ellipsis">Régimen Laboral</p>
          <h2 class="mb-0">{{$laborals->count()}}</h2>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="badge-circle badge-circle-lg badge-circle-light-success mx-auto my-1">
            <i class="bx bx-purchase-tag font-medium-5"></i>
          </div>
          <p class="text-muted mb-0 line-ellipsis">Condición Laboral</p>
          <h2 class="mb-0">{{$conditions->count()}}</h2>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
            <i class="bx bx-money font-medium-5"></i>
          </div>
          <p class="text-muted mb-0 line-ellipsis">Régimen Pensionario</p>
          <h2 class="mb-0">{{$pensions->count()}}</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Widgets Statistics End -->

<section id="widgets-chart" >
  <div class="row ">
    <div class="col-12 mt-1 mb-2">
      <h4>Acceso directo</h4>
      <hr>
    </div>
  </div>


  <div class="row ">
    <div class="col-lg-4 col-md-4">
      {{-- <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center border-bottom">
          <h4 class="card-title">Registro de Trabajo Presencial</h4>
          <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
        </div>
        <div class="card-body">
          
          

        </div>
      </div> --}}
      <div class="card  kb-hover-1">
        <div class="row no-gutters">
          <div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center p-1">
            <i  class="livicon-evo"
              data-options="name: grid.svg; size: 80px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-1;">
            </i>
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="card-body text-center">
              <h4 class="card-title ">Lista de Trabajo Presencial</h4>
              <p class="card-text ">Click para ver la lista disponible.</p>
              <a href="{{route('presencials.index')}}" class="btn btn-secondary">Ver</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <div class="col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center border-bottom">
          <h4 class="card-title">Trabajadores por Oficina</h4>
          <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
        </div>
        <div class="card-body">
                  

        </div>
      </div>
    </div> --}}
    
    {{-- <div class="col-xl-4 col-md-6 earnings-card" id="widget-earnings">
      <div class="card">
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
          <h5 class="card-title"><i class="bx bx-dollar font-medium-5 align-middle"></i> Earnings</h5>
          <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
        </div>
        <div class="card-body py-1">
          <!-- earnings swiper starts -->
          <div class="widget-earnings-swiper swiper-container p-1">
            <div class="swiper-wrapper">
              <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="repo-design">
                <i class="bx bx-pyramid mr-50 font-large-1"></i>
                <div class="swiper-text">Repo Design
                  <p class="mb-0 font-small-2 font-weight-normal">Incognito</p>
                </div>
              </div>
              <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="laravel-temp">
                <i class="bx bx-sitemap mr-50 font-large-1"></i>
                <div class="swiper-text">Laravel Temp
                  <p class="mb-0 font-small-2 font-weight-normal">Global dish</p>
                </div>
              </div>
              <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="admin-theme">
                <i class="bx bx-check-shield mr-50 font-large-1"></i>
                <div class="swiper-text">Admin Theme
                  <p class="mb-0 font-small-2 font-weight-normal">Medal owner</p>
                </div>
              </div>
              <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="ux-developer">
                <i class="bx bx-devices mr-50 font-large-1"></i>
                <div class="swiper-text">UX Developer
                  <p class="mb-0 font-small-2 font-weight-normal">Generic name</p>
                </div>
              </div>
              <div class="swiper-slide rounded swiper-shadow py-75 px-2 d-flex align-items-center" id="marketing-guide">
                <i class="bx bx-book-bookmark mr-50 font-large-1"></i>
                <div class="swiper-text">Marketing Guide
                  <p class="mb-0 font-small-2 font-weight-normal">Cool stuff</p>
                </div>
              </div>
            </div>
          </div>
          <!-- earnings swiper ends -->
        </div>
        <div class="main-wrapper-content">
          <div class="wrapper-content" data-earnings="repo-design">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Mera Baker</h6>
                          <span class="font-small-2">Ux Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="80"
                          aria-valuemax="100" style="width:55%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $860</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-10.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Jerry Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="80"
                          aria-valuemax="100" style="width:33%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-warning">- $280</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly uez</h6>
                          <span class="font-small-2">Developer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="80"
                          aria-valuemax="100" style="width:10%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $853</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lary Masey</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $125</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-12.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lula Taylor</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80"
                          aria-valuemax="100" style="width:35%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $310</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wrapper-content" data-earnings="laravel-temp">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Myra Baker</h6>
                          <span class="font-small-2">Ux Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="80"
                          aria-valuemax="100" style="width:25%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $120</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-9.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Jesus Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="80"
                          aria-valuemax="100" style="width:28%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-info">- $280</span></td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-10.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly Dez</h6>
                          <span class="font-small-2">Developer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="80"
                          aria-valuemax="100" style="width:90%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $83</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lary Masey</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $125</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-12.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lula Taylor</h6>
                          <span class="font-small-2">Developer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80"
                          aria-valuemax="100" style="width:35%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $310</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wrapper-content" data-earnings="admin-theme">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-26.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Myra Baker</h6>
                          <span class="font-small-2">UI Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="80"
                          aria-valuemax="100" style="width:77%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $920</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-25.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Mera Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="52" aria-valuemin="80"
                          aria-valuemax="100" style="width:52%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-info">- $180</span></td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-15.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly Dez</h6>
                          <span class="font-small-2">Developer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="80"
                          aria-valuemax="100" style="width:90%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $553</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">jini mara</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $125</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-12.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lula Taylor</h6>
                          <span class="font-small-2">UX</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80"
                          aria-valuemax="100" style="width:35%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $150</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wrapper-content" data-earnings="ux-developer">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-8.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Myra Baker</h6>
                          <span class="font-small-2">UI Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="59" aria-valuemin="80"
                          aria-valuemax="100" style="width:59%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $210</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-16.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Drako Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="38" aria-valuemin="80"
                          aria-valuemax="100" style="width:38%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $280</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-1.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly Dez</h6>
                          <span class="font-small-2">Developer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="80"
                          aria-valuemax="100" style="width:90%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $853</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lary Masey</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $125</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-2.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lvia Taylor</h6>
                          <span class="font-small-2">Developer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="80"
                          aria-valuemax="100" style="width:75%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $360</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="wrapper-content" data-earnings="marketing-guide">
            <div class="widget-earnings-scroll table-responsive">
              <table class="table table-borderless widget-earnings-width mb-0">
                <tbody>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-18.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Myra Baker</h6>
                          <span class="font-small-2">UI Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="22" aria-valuemin="80"
                          aria-valuemax="100" style="width:22%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $120</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-19.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">yono Lter</h6>
                          <span class="font-small-2">Designer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-info progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="28" aria-valuemin="80"
                          aria-valuemax="100" style="width:28%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">- $270</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-11.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Pauly Dez</h6>
                          <span class="font-small-2">Developer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-success progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="80"
                          aria-valuemax="100" style="width:90%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-success">+ $853</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-12.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lary Masey</h6>
                          <span class="font-small-2">Marketing</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-primary progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="80"
                          aria-valuemax="100" style="width:15%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-primary">+ $225</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pr-75">
                      <div class="media align-items-center">
                        <a class="media-left mr-50" href="javascript:;">
                          <img src="{{asset('images/portrait/small/avatar-s-25.jpg')}}" alt="avatar"
                            class="rounded-circle" height="30" width="30">
                        </a>
                        <div class="media-body">
                          <h6 class="media-heading mb-0">Lula Taylor</h6>
                          <span class="font-small-2">Developer</span>
                        </div>
                      </div>
                    </td>
                    <td class="px-0 w-25">
                      <div class="progress progress-bar-danger progress-sm mb-0">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="80"
                          aria-valuemax="100" style="width:35%;"></div>
                      </div>
                    </td>
                    <td class="text-center"><span class="badge badge-light-danger">- $350</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div> --}}

    

  </div>

</section>


<!-- Widgets Charts start -->
<section id="widgets-chart" >
  
  <div class="row d-none d-md-flex d-xl-flex">
    <div class="col-12 mt-1 mb-2">
      <h4>Resumen</h4>
      <hr>
    </div>
  </div>


  <div class="row d-none d-md-flex d-xl-flex">
    <div class="col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center border-bottom">
          <h4 class="card-title">Tipo de Trabajadores</h4>
          <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
        </div>
        <div class="card-body">
          <div class="py-2">
            {!! $chart->container() !!}
          </div>
          

        </div>
      </div>
    </div>

    <div class="col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center border-bottom">
          <h4 class="card-title">Trabajadores por Oficina</h4>
          <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
        </div>
        <div class="card-body">
          <div class="py-2">
            {!! $chart_office->container() !!}
          </div>
          

        </div>
      </div>
    </div>

  </div>

</section>
<!-- Widgets Charts End -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
<script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
<script src="{{asset('vendors/js/extensions/moment.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"></script>
<script src="{{ LarapexChart::cdn() }}"></script>


{{-- {!! $chart->renderChartJsLibrary() !!}
 --}}
@endsection
{{-- page scripts --}}
@section('page-scripts')
{{-- <script src="{{asset('js/scripts/cards/widgets.js')}}"></script>
 --}}
 <script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script>
 {{ $chart->script() }}
 {{ $chart_office->script() }}
 {{-- {!! $chart->script() !!} --}}
@endsection


