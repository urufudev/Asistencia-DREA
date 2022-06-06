@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title', 'Dashboard')
{{-- vendor scripts --}}
@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/extensions/swiper.min.css') }}">

@endsection

{{-- page styles --}}
@section('page-styles')
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/pages/widgets.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/dashboard-ecommerce.css') }}">
@endsection

@section('content')
    <!-- Widgets Statistics start -->
    <section id="widgets-Statistics">
        <div class="row">
            <div class="col-12 mt-1 mb-2 ">
                <h2 class="text-capitalize">Hola {{ Auth::user()->name ?? 'Invitado' }} @if (Auth::user()->dni == 72830344)
                        😒
                    @else
                        😄
                    @endif,</h2>
                <h1>Bienvenido de nuevo 👋</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-md-12 col-sm-12">
                <div class="row d-none d-md-flex d-xl-flex">
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="badge-circle badge-circle-lg badge-circle-light-info mx-auto my-1">
                                    <i class="bx bx-group font-medium-5"></i>
                                </div>
                                <p class="text-muted mb-0 line-ellipsis">Trabajadores</p>
                                <h2 class="mb-0">{{ $users->count() }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="badge-circle badge-circle-lg badge-circle-light-warning mx-auto my-1">
                                    <i class="bx bx-building-house font-medium-5"></i>
                                </div>
                                <p class="text-muted mb-0 line-ellipsis">Oficinas</p>
                                <h2 class="mb-0">{{ $offices->count() }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="badge-circle badge-circle-lg badge-circle-light-danger mx-auto my-1">
                                    <i class="bx bx-sitemap font-medium-5"></i>
                                </div>
                                <p class="text-muted mb-0 line-ellipsis">Cargos</p>
                                <h2 class="mb-0">{{ $positions->count() }}</h2>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Seccion widget --}}
                <section id="widgets-chart">
                    <div class="row ">
                        <div class="col-12 mt-1 mb-2">
                            <h4>Acceso directo</h4>
                            <hr>
                        </div>
                    </div>


                    <div class="row ">
                        <div class="col-lg-6 col-md-6">

                            <div class="card  kb-hover-1">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center p-1">
                                        <i class="livicon-evo"
                                            data-options="name: grid.svg; size: 80px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-1;">
                                        </i>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="card-body text-center">
                                            <h4 class="card-title ">Lista de Trabajo Presencial</h4>
                                            <p class="card-text ">Click para ver la lista disponible.</p>
                                            <a href="{{ route('presencials.index') }}"
                                                class="btn btn-secondary white">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (Auth::user()->profile->vaccine == null || Auth::user()->profile->vaccine_second == null || Auth::user()->profile->vaccine_third == null)
                            <div class="col-lg-6 col-md-6">

                                <div class="card border-danger kb-hover-2">
                                    <div class="row no-gutters">
                                        <div
                                            class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center p-1">
                                            <i class="livicon-evo"
                                                data-options="name: dropper.svg; size: 80px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-2;">
                                            </i>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="card-body text-center">
                                                <h4 class="card-title ">Actualiza tu Tercera Dosis</h4>
                                                <p class="card-text ">Click para actualizar los datos de tu tercera
                                                    dosis de vacunación</p>
                                                <a href="{{ route('account-setting') }}"
                                                    class="btn btn-secondary white">Ver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Historial de registro de asistencia --}}
                        <div class="col-lg-6 col-md-6">

                            <div class="card  kb-hover-2">
                                <div class="row no-gutters">
                                    <div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center p-1">
                                        <i class="livicon-evo"
                                            data-options="name: calendar.svg; size: 80px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-2;">
                                        </i>
                                    </div>
                                    <div class="col-lg-8 col-md-12">
                                        <div class="card-body text-center">
                                            <h4 class="card-title ">Historial de Trabajo Presencial</h4>
                                            <p class="card-text ">Click para ver el historial.</p>
                                            <a href="{{ route('myattendance') }}" class="btn btn-secondary white">Ver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @hasrole('Administrador')
                            <div class="col-lg-6 col-md-6">

                                <div class="card  kb-hover-2">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 col-md-12 d-flex align-items-center justify-content-center p-1">
                                            <i class="livicon-evo"
                                                data-options="name: radiation.svg; size: 80px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-2;">
                                            </i>
                                        </div>
                                        <div class="col-lg-8 col-md-12">
                                            <div class="card-body text-center">
                                                <h4 class="card-title ">Personal Infectado</h4>
                                                <p class="card-text ">Click para ver la lista de personal infectado.</p>
                                                <a href="{{ route('infecteds.index') }}"
                                                    class="btn btn-secondary white">Ver</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endhasrole



                    </div>

                </section>
                {{-- <div class="row d-none d-md-flex d-xl-flex">
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
      </div> --}}
                {{-- <div class="row d-none d-md-flex d-xl-flex">

        <div class="col-xl-4 col-md-4 col-sm-6">
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
        <div class="col-xl-4 col-md-4 col-sm-6">
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
        <div class="col-xl-4 col-md-4 col-sm-6">
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
      </div> --}}
            </div>

            <div class="col-lg-4">
                <div class="card widget-notification">
                    <div class="card-header border-bottom kb-hover-3">
                        <h4 class="card-title d-flex align-items-center">
                            <i class="livicon-evo font-medium-4 mr-1"
                                data-options="name: gift.svg; size: 35px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-3;">
                            </i>Cumpleaños
                        </h4>

                        <div class="heading-elements">
                            <button type="button"
                                class="btn btn-light-primary text-capitalize">{{ Carbon\Carbon::now()->isoFormat('MMMM') }}</button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush overflow-auto">
                            @foreach ($profilebirthdays as $profilebirthday)
                                <li
                                    class="list-group-item list-group-item-action border-0 d-flex align-items-center justify-content-between">
                                    <div class="list-left d-flex">
                                        <div class="list-icon mr-1">
                                            <div class="avatar bg-rgba-primary m-0 p-25">
                                                <div class="avatar-content">
                                                    <i class="bx bx-cake text-primary font-medium-5"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <span class="list-title">{{ $profilebirthday->user->full_name }}</span>
                                            <small
                                                class="text-muted d-block text-capitalize">{{ $profilebirthday->birthday->isoFormat('D MMMM') }}</small>
                                        </div>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Widgets Statistics End -->




    <!-- Widgets Charts start -->
    <section id="widgets-chart">

        <div class="row d-none d-md-flex d-xl-flex">
            <div class="col-12 mt-1 mb-2">
                <h4>Resumen</h4>
                <hr>
            </div>
        </div>


        <div class="row d-none d-md-flex d-xl-flex">
            <div class="col-lg-7 col-md-7">
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

            <div class="col-lg-5 col-md-5">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                        <h4 class="card-title">Total de Trabajadores Vacunados</h4>
                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                    <div class="card-body">
                        <div class="py-2">
                            {!! $chart_vaccine->container() !!}
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-5">
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


            <div class="col-lg-5 col-md-5">
                <div class="card h-50">
                    <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                        <h4 class="card-title">Trabajadores sin vacuna/ segunda dosis</h4>
                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                    <div class="card-body ">
                        <div class="py-2">
                            <ul class="list-group">
                                @foreach ($users_vaccines as $users_vaccine)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>{{ $loop->iteration }}) {{ $users_vaccine->user->full_namea }}</span>

                                        <span class="badge badge-danger badge-pill badge-round ">
                                            {{ $users_vaccine->vaccine ?? 'No se vacuno' }}
                                        </span>
                                        <span class="badge badge-danger badge-pill badge-round ">
                                            {{ $users_vaccine->vaccine_first_date }}
                                        </span>
                                        <span class="badge badge-danger badge-pill badge-round ">
                                            {{ $users_vaccine->vaccine_second_date }}
                                        </span>



                                    </li>
                                @endforeach
                            </ul>

                        </div>


                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-5">
                <div class="card  h-50">
                    <div class="card-header d-flex justify-content-between align-items-center border-bottom">
                        <h4 class="card-title">Trabajadores sin Tercera dosis</h4>
                        <i class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                    </div>
                    <div class="card-body " style=" overflow-y: scroll;">
                        <div class="py-2">
                            <ul class="list-group">
                                @foreach ($users_vaccines_third as $users_third)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>{{ $loop->iteration }}) {{ $users_third->user->full_namea }}</span>
                                        <span class="badge badge-danger badge-pill badge-round ">
                                            {{ $users_third->vaccine_first_date }}
                                        </span>
                                        <span class="badge badge-danger badge-pill badge-round ">
                                            {{ $users_third->vaccine_second_date }}
                                        </span>

                                        <span class="badge badge-danger badge-pill badge-round ">
                                            {{ $users_third->vaccine_third_date }}
                                        </span>



                                    </li>
                                @endforeach
                            </ul>

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
    <script src="{{ asset('vendors/js/extensions/swiper.min.js') }}"></script>
    <script src="{{ asset('vendors/js/extensions/moment.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js"></script>
    <script src="{{ LarapexChart::cdn() }}"></script>


    {{-- {!! $chart->renderChartJsLibrary() !!} --}}
@endsection
{{-- page scripts --}}
@section('page-scripts')
    {{-- <script src="{{asset('js/scripts/cards/widgets.js')}}"></script> --}}
    {{-- <script src="{{asset('js/scripts/pages/dashboard-ecommerce.js')}}"></script> --}}
    {{ $chart->script() }}
    {{ $chart_office->script() }}
    {{ $chart_vaccine->script() }}
    {{-- {!! $chart->script() !!} --}}
@endsection
