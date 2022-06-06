{{-- mainLayouts extends --}}
@extends('layouts.contentLayoutMaster')

{{-- Page title --}}
@section('title', 'Historial de Registro de Trabajo Presencial')
{{-- vendor styles --}}
@section('vendor-styles')

@endsection
{{-- page styles --}}
@section('page-styles')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.css"/>
<link rel="stylesheet" type="text/css" href="{{asset('css/plugins/calendars/app-calendar.css')}}">

@endsection

{{-- main page content --}}
@section('content')

<!-- calendar Wrapper  -->
<section id="backcolor-gradient">
  <div class="row">
    <div class="col-md-12">
      
      <div>
        <div class="card lg:w-50 xl:w-50 md:w-50" >
            <!-- datatable start -->
            <div class="card-header">
              
            </div>
            <div class="card-body text-uppercase">
              {!! $calendar->calendar() !!}
            </div>
        
          </div>
    </div>
    
      
    </div>
  </div>
</section>
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
{!! $calendar->script() !!}

@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>


@endsection
