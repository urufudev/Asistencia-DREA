@extends('layouts.contentLayoutMaster')

@section('title','Trabajo Presencial')

@section('actionbutton')
<a href="{{route('events.index')}}"  class="btn btn-secondary">
  <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
  <span class="align-middle ml-25 text-bold-600">Volver</span>
</a> 
@endsection
@section('content')

<section id="backcolor-gradient">
  <div class="row">
    <div class="col-12">
    <div class="card widget-user-details mb-1">
      <div class="card-header">
        <div class="card-title-details d-flex align-items-center">
          {{-- <div class="avatar bg-rgba-primary p-25 mr-2 ml-0">
            <img class="img-fluid" src="{{asset('images/profile/user-uploads/social-2.jpg')}}" alt="img placeholder"
              height="70" width="70">
          </div> --}}
          <div>
            <h5>{{ $event->name }}  | {{ Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</h5>
            <div class="card-subtitle">Personal que realizara trabajo presencial el día {{ Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</div>
          </div>
        </div>
        
      </div>
      <div Class="card-body">
        <div class="table-responsive">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td class="pb-0 pl-0 font-medium-3"><strong>Fecha y Hora de Inicio</strong></td>
                <td class="pb-0 pl-0 font-medium-3"><strong>Fecha y Hora de Finalización</strong></td>
                
                <td class="pb-0 font-medium-3"><strong>Limite de Trabajadores</strong></td>
                
                
              </tr>
              <tr>
                <td class="pl-0">
                  
                  <div class="badge badge-light-primary text-bold-500 font-medium-3 py-50 d-inline-flex align-items-center">
                    <i class="bx bx-time mr-1"></i>
                    {{ Carbon\Carbon::parse($event->start)->format('d/m/Y H:i A') }}</div>
                </td>
                <td class="pl-0">
                  <div class="badge badge-light-success text-bold-500 font-medium-3 py-50 d-inline-flex align-items-center">
                    <i class="bx bx-time mr-1"></i>
                    {{ Carbon\Carbon::parse($event->end)->format('d/m/Y H:i A') }}
                  </div>
                </td>
                
                <td>
                  <div class="badge badge-light-danger text-bold-500 font-medium-3 py-50 d-inline-flex align-items-center">
                    <i class="bx bx-group mr-1"></i>
                  {{count($event->presencialworks) }}   / {{ $event->userlimit }}
                  </div>
                </td>
                
                {{-- {{count($event->presencialworks) }}
                {{count($event->presencialworks)  / $event->userlimit * 100}} --}}
              </tr>
            </tbody>
          </table>
        </div>
        <p class="font-medium-3">Progreso</p>
        <div class="progress progress-bar-primary progress-sm ">
          <div class="progress-bar progress-label" role="progressbar" aria-valuenow="20" style='width:{{count($event->presencialworks)  / $event->userlimit * 100}}%'></div>
        </div>

      </div>

     

    </div>
    


    <div class="container">
      <div class="row">
        <div class="col-lg-12">




          <div class="accordion collapse-icon accordion-icon-rotate" id="accordionWrapa2">
            @forelse ($eventdetails as $office => $eventdetail)
            <div class="card collapse-header">
              <div id="heading{{ $office }}" class="card-header" data-toggle="collapse" data-target="#accordion{{ $office }}" aria-expanded="false"
                aria-controls="accordion{{ $office }}" role="tablist">

                
                
                <span class="collapse-title ">
                  <div class="avatar bg-rgba-primary m-0 p-25">
                    <div class="avatar-content">
                      <i class="bx bx-buildings text-primary font-medium-5  text-center ml-1"></i>
                    </div>
                  </div>
                  
                  <span class="align-middle">

                    {{$eventdetail->first()->office->name}} 
                    <div class="badge badge-light-primary d-inline-flex align-items-center ml-2 text-bold-500 font-medium-1">
                      <i class="bx bx-group "></i>
                      {{$eventdetail->count()}}
                    </div>
                  
                  </span>

                </span>
              </div>
              <div id="accordion{{ $office }}" role="tabpanel" data-parent="#accordionWrapa2" aria-labelledby="heading{{ $office }}" class="collapse">
                <div class="card-body">
                  <div class="list-group list-group-flush">
                    @foreach ($eventdetail as $item)

                    <a href="javascript:void(0);" class="list-group-item list-group-item-action border-0 d-flex">
                      <div class="list-icon">
                        <i class="badge-circle badge-circle-light-secondary bx bx-user-circle mr-1 text-primary"></i>
                      </div>
                      <div class="list-content">
                        <h5>{{$item->user->full_namea}}</h5>
                        <p class="mt-0">
                          Nombre completo
                        </p>
                        {{-- <small>{{$item->created_at}}</small> --}}
                        <span class="badge badge-warning badge-pill badge-round ml-1">{{$item->feber ?: 'NN'}}</span>
                        <span class="badge badge-warning badge-pill badge-round ml-1">{{$item->respire ?: 'NN'}}</span>
                        <span class="badge badge-warning badge-pill badge-round ml-1">{{$item->fleme ?: 'NN'}}</span>
                        <span class="badge badge-warning badge-pill badge-round ml-1">{{$item->personscovid ?: 'NN'}}</span>
                        <span class="badge badge-warning badge-pill badge-round ml-1">{{$item->medicine ?: 'NN'}}</span>
                        
                      </div>
                    </a>
        
                  
                  @endforeach     
                </div>
                </div>
              </div>
            </div>

            @empty
            @endforelse
          </div>

        </div>
      </div>
    </div>

  </div>
  </div>
</section>

@endsection