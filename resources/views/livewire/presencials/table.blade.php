<div wire:poll.20000ms.visible>
  
    @forelse ($presencialsDates as $date => $presencials)
{{--     <div class="alert alert-primary border-primary  mb-1 " role="alert" >
      <p class="text-center mb-0 text-bold-700 font-medium-3 ">
        <i class="bx bx-calendar-event "></i>
        {{ $date }}</p>
    </div> --}}

<div class="container">
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="alert alert-primary border-primary  mb-1 " role="alert" >
        <p class="text-center mb-0 text-bold-700 font-medium-3 ">
          <i class="bx bx-calendar-event "></i>
          {{ $date }}</p>
      </div>
    </div>
    
  </div>
</div>

    
        
        @foreach ($presencials as $presencial)

        <div class="card widget-user-details mb-1" id="presencial">
          <div class="card-header">
            <div class="card-title-details d-flex align-items-center">
              {{-- <div class="avatar bg-rgba-primary p-25 mr-2 ml-0">
                <img class="img-fluid" src="{{asset('images/profile/user-uploads/social-2.jpg')}}" alt="img placeholder"
                  height="70" width="70">
              </div> --}}
              <div>
                <h5>{{$presencial->id}} | {{ $presencial->name }} </h5>
                <div class="card-subtitle">{{-- {{ Carbon\Carbon::parse($presencial->date)->format('d F, Y (l)') }} || --}} {{$presencial->start->diffForHumans()}} {{-- || {{ date('d-m-Y', strtotime($presencial->date)) }} --}}</div>
              </div>
            </div>
            
          </div>
          <div Class="card-body">
            <div class="table-responsive">
              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td class="pb-0 pl-0 font-medium-3"><strong>Limite de Trabajadores</strong></td>
                    <td class="pb-0 pl-0 font-medium-3"><strong>Fecha y Hora de Inicio</strong></td>
                    <td class="pb-0 pl-0 font-medium-3"><strong>Fecha y Hora de Finalización</strong></td>
                    
                    
                    
                    
                  </tr>
                  <tr>
                    <td  class="pl-0">
                      <div class="badge 
                      @if(count($presencial->presencialworks) ==  $presencial->userlimit)
                      badge-light-danger
                      @elseif ($presencial->userlimit %90 >=  count($presencial->presencialworks))
                      badge-light-success 
                      @elseif(count($presencial->presencialworks) <=  $presencial->userlimit)
                      badge-light-warning
                      @else
                      badge-light-danger
                      @endif
                      text-bold-500 font-medium-3 py-50 d-inline-flex align-items-center">
                        <i class="bx bx-group mr-1"></i>
                      {{count($presencial->presencialworks) }}   / {{ $presencial->userlimit }}
                      </div>
                    </td>
                    <td class="pl-0">
                      
                      <div class="badge badge-light-info text-bold-500 font-medium-3 py-50 d-inline-flex align-items-center">
                        <i class="bx bx-time mr-1"></i>
                        {{ Carbon\Carbon::parse($presencial->start)->format('d/m/Y H:i A') }}</div>
                    </td>
                    <td class="pl-0">
                      <div class="badge badge-light-primary text-bold-500 font-medium-3 py-50 d-inline-flex align-items-center">
                        <i class="bx bx-time mr-1"></i>
                        {{ Carbon\Carbon::parse($presencial->end)->format('d/m/Y H:i A') }}
                      </div>
                    </td>
                    
                    
                    
                    {{-- {{$presencial->presencialworks->where('user_id', Auth::user()->id )}} --}}
                    {{-- {{count($presencial->presencialworks)  / $presencial->userlimit * 100}} --}}
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="font-medium-3">Progreso</p>
            <div class="progress progress-bar-primary progress-sm ">
              <div class="progress-bar progress-label" role="progressbar" aria-valuenow="20" style='width:{{count($presencial->presencialworks)  / $presencial->userlimit * 100}}%'></div>
            </div>

          </div>
          <div class="card-footer d-flex justify-content-between border-top">
            <div class="d-flex">
              
              
            </div>
            <div>



              {{-- <a href="">{{dd($presencials)}} </a> --}}
              @if (count($presencial->presencialworks) >=  $presencial->userlimit)
              <div class="badge badge-light-danger text-bold-500 font-medium-1 py-50 d-inline-flex align-items-center">
                <i class="bx bx-group mr-1"></i>
                No hay cupos</div>
              
                {{-- <a href="">{{$presencial->presencialworks}}  - {{$presencial->id}}</a> --}}
                
                @elseif($presencial->presencialworks->where('user_id', Auth::user()->id)->isEmpty())
                
                  @if (Carbon\Carbon::now() >= $presencial->start AND Carbon\Carbon::now() <= $presencial->end)
                    @can('create', 'Models\PresencialWork')
                      <button type="button" class="btn btn-primary glow  " data-target="#modal-register-{{$presencial->id}}" data-toggle="modal">
                        
                        <i class="bx bx-edit-alt white"></i>
                        Registrarme
                      </button>
                    @endcan
                    @else
                    <div class="badge badge-light-warning text-bold-500 font-medium-1 py-50 d-inline-flex align-items-center">
                      <i class="bx bx-group mr-1"></i>
                      Fuera de horario</div>
                      
                  @endif
                  

                @else
                

                  <div class="row">
                    <div class="col-12">
                      <div class="badge badge-light-success text-bold-500 py-50 font-medium-1 mr-1 mb-1 d-inline-flex align-items-center">
                        <i class="bx bx-group mr-1"></i>
                        Registrado</div>
                    
                        {{-- @can('deleteAttendance', $presencial) --}} 
                        @can('deleteAttendance', 'Models\PresencialWork')
                        <button type="button" class="btn  btn-outline-danger mr-1 mb-1" data-target="#modal-destroy-{{$presencial->id}}" data-toggle="modal">
                        ¿Desea eliminar su registro?</button>
                        @endcan
                      <!-- basic Badges -->
                      
                    </div>
                  </div>

                  {{-- <div class="table-responsive">
                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td class="pb-0 pl-0">
                            <div class="badge badge-light-success text-bold-500 font-medium-1 mr-1 ">
                              <i class="bx bx-group mr-1"></i>
                              Ya te encuentras registrado</div>
                          </td>
                          <td class="pb-0 pl-0">
                            <button type="button" class="btn  btn-outline-danger ">¿Desea eliminar su registro?</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div> --}}
                  
                    
                  {{-- <button type="button" class="badge badge-light-success text-bold-500 font-medium-1 py-50 d-inline-flex align-items-center">
                      <i class="bx bx-group mr-1"></i>
                      ¿Desea eliminar su registro?</button> --}}
                  
                
                @endif
              
              
              

              {{-- <a style="cursor:pointer" data-target="#modal-register-{{$presencial->id}}" data-toggle="modal" class="btn btn-icon btn-primary glow" data-placement="top" data-toggle="tooltip" title="Registrarse" >
                Registrarme
                <i class="bx bx-trash-alt white"></i>
              </a> --}}

            </div>

          </div>
        </div>
        
        <div >@include('presencials.modal')</div>
        <div >@include('presencials.modal-destroy')</div>
        @endforeach
        <hr>
    @empty
        <tr>
            <td class="text-center" colspan="3">
                No hay registros.
            </td>
        </tr>
    @endforelse

      
</div>

@section('page-scripts')

<script type="text/javascript">


</script>
@endsection