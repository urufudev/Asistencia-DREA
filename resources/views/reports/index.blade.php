{{-- mainLayouts extends --}}
@extends('layouts.contentLayoutMaster')

{{-- Page title --}}
@section('title', 'Reporte de Trabajo Presencial')
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
<section >
    
    <div class="row">
        {{-- <div class="col-md-4 col-12">
            <div class="card" >
              <div class="card-header">
                <h4 class="card-title">Reporte de Trabajo Presencial</h4>
              </div>
              <div class="card-body">
                <form class="form">
                  <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-icon">Mes</label>
                                <div class="position-relative has-icon-left">
                                <input type="month" id="first-name-icon" class="form-control" name="date_report" >
                                
                                </div>
                            </div>
                        </div>
    
                        <div class="col-12">
                            <div class="form-group">
                                <label for="first-name-icon">Condición Laboral</label>
                                
                                {{Form::select('condition_id',$conditions,null,['class'=>'form-control select2','autocomplete'=>'off','placeholder' => 'Seleccione'])}}
                                
                            </div>
                        </div>
    
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary">Reset</button>
                        </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div> --}}
   
        {{-- <div class="col-md-12">

            @foreach($users as $office => $chunk)
            <div class="card lg:w-50 xl:w-50 md:w-50" >
                
                <div class="card-header  align-center">

                    <h3>{{$office}}</h3>
                    
                </div>
                

                <div class="card-body text-uppercase">
                
                
                <table class="table table-sm table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 85px">Trabajadores/Fechas</th>
                            @for($i = 1; $i <= $daysInMonth; $i++)
                                <th style="width: 5px">{{ $i }}</th>
                            @endfor
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($chunk as $userp)
                            <tr>
                                <td>{{ $userp->user->full_name }}</td>
                                @for($i = 1; $i <= $daysInMonth; $i++)
                                    <td style="width: 5px">

                                        <input
                                            type="checkbox"
                                            name="user_{{ $userp->user->id }}[]"
                                            value="{{ $day = now()->setYear($year)->setMonth($month)->setDay($i)->format('Y-m-d') }}"

                                            {{ isset($presencialworks[$userp->user->id][$day]) ? 'checked' : '' }}
                                        >
                                    
                                        
                                    </td>
                                @endfor
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                </div>
            
            </div>
            @endforeach
        
        </div> --}}
        
    
        
        
        {{-- @livewire('reports.month') --}}
    
   </div>
   <livewire:reports.monthreport/>	
</section>
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')


@endsection

{{-- page scripts --}}
@section('page-scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.5.0/main.min.js"></script>


@endsection
