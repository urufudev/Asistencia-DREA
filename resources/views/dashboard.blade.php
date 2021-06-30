

@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Dashboard')
{{-- vendor scripts --}}
@section('vendor-styles')

@endsection

{{-- page styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/widgets.css')}}">
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
  <div class="row">
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



<!-- Widgets Charts start -->
<section id="widgets-chart">
  <div class="row">
    <div class="col-12 mt-1 mb-2">
      <h4>Resumen</h4>
      <hr>
    </div>
  </div>


  <div class="row">
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
 {{ $chart->script() }}
 {{ $chart_office->script() }}
 {{-- {!! $chart->script() !!} --}}
@endsection


