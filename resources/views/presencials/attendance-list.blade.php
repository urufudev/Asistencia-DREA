@extends('layouts.contentLayoutMaster')
{{-- title --}}
@section('title','Lista de Registro de Asistencia')
{{-- page-styles --}}
@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-knowledge-base.css')}}">
@endsection

@section('content')
<!-- Knowledge base Jumbotron start -->
{{-- @livewire('presencials.attendance',['event'=> $event]) --}}

<div>


    <section class="kb-search">
        <div class="row">
          <div class="col-12">
            <div class="card bg-transparent shadow-none kb-header">
              <div class="card-body text-center">
                <h1 class=" kb-title">Registro de Asistencia de los Eventos</h1>

              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      <section class="kb-content">
        <div class="row kb-search-content-info mx-1 mx-md-2 mx-lg-5">
          <div class="col-12">
            <div class="row match-height">


             @foreach ($events as $event)
             <div class="col-md-6 col-sm-6 kb-search-content">
                <div class="card kb-hover-{{$event->id}}">
                  
                  <div class="card-body {{-- text-center --}}">
                    <a href="{{route('attendance',$event->id)}}">
                      <div class=" mb-1 text-center">
                        <i wire:ignore class="livicon-evo"
                          data-options="name: grid.svg; size: 50px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-{{$event->id}};">
                        </i>
                      </div>
                      
                      <h5 class="text-center">{{$event->name}} 
                        <span class="badge badge-primary badge-pill badge-round ml-1">{{$event->userlimit}}</span>
                      </h5>
                      
                      
                    </a>

                    <ul class="text-center{{-- list-unstyled --}}">
                      <li>{{$event->startdate}} || {{$event->enddate}}</li>
                    </ul>
                  </div>
                  
                </div>
              </div>
             @endforeach
              
             
            </div>
          </div>
        </div>
      </section>



    
</div>


<!-- Knowledge base ends -->
@endsection

{{-- page scripts --}}
@section('page-scripts')

@endsection
