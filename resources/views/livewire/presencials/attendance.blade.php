<div>


    <section class="kb-search">
        <div class="row">
          <div class="col-12">
            <div class="card bg-transparent shadow-none kb-header">
              <div class="card-body text-center">
                <h1 class=" mb-2 kb-title">Registro de Asistencia de: {{$event->name}}</h1>

                <form wire:submit.prevent="save">
                  <label >Tipo de Asistencia</label>
                  @error('type')
                    <div class="text-danger fs-15 mt-0">{{$message}}</div>
                  @enderror  
                  <ul class="list-unstyled mb-0">
                    <li class="d-inline-block mr-2 mb-1">
                      <fieldset>
                          <div class="radio radio-success radio-glow">
                              <input type="radio" id="feber_y" wire:model="type"  value="input">
                              <label for="feber_y">ENTRADA</label>
                          </div>
                      </fieldset>
                    </li>

                    <li class="d-inline-block mr-2 mb-1">
                      <fieldset>
                        <div class="radio radio-danger radio-glow">
                            <input type="radio" id="feber_n" wire:model="type"  value="output">
                            <label for="feber_n">SALIDA</label>
                        </div>
                      </fieldset>
                    </li>
                    
                  </ul>

                  <fieldset class="form-group position-relative w-50 mx-auto kb-search-width">
                    <input type="text" class="form-control form-control-lg pl-2" wire:model="dni"
                      placeholder="DNI" autofocus maxlength="8">
                    <button class="btn btn-primary  position-absolute d-none d-sm-block" type="submit">Buscar</button>
                    <button class="btn btn-primary  position-absolute d-block d-sm-none" type="submit"><i
                        class="bx bx-search"></i></button>
                  </fieldset>
                  @error('dni')
                    <div class="text-danger fs-15 mt-0">{{$message}}</div>
                  @enderror
                  {{$dni}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      <section class="kb-content">
        <div class="row kb-search-content-info mx-1 mx-md-2 mx-lg-5">
          <div class="col-12">
            <div class="row match-height">

              {{-- @if (session()->has('message'))
              <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                  role="alert">
                  <div class="flex">
                      <div>
                          <p class="text-sm">{{ session('message') }}</p>
                      </div>
                  </div>
              </div>
              @endif --}}

              @forelse ($eventdetails as $office => $eventdetail)
              <div class="col-md-4 col-sm-6 kb-search-content">
                <div class="card kb-hover-{{$office}}">
                  
                  <div class="card-body {{-- text-center --}}">
                    <a href="{{url('page/knowledge-base/categories')}}">
                      <div class=" mb-1 text-center">
                        <i wire:ignore class="livicon-evo"
                          data-options="name: building.svg; size: 50px; strokeColorAlt: #FDAC41; strokeColor: #5A8DEE; style: lines-alt; eventOn: .kb-hover-{{$office}};">
                        </i>
                      </div>
                      
                      <h5 class="text-center">{{$eventdetail->first()->office->name}} 
                        <span class="badge badge-primary badge-pill badge-round ml-1">{{$eventdetail->count()}}</span>
                      </h5>
                      
                      
                    </a>
                    <ul class="{{-- list-unstyled --}}">
                      @foreach ($eventdetail as $item)
                      <li>{{$item->user->full_namea}} | {{$item->inputtime}} | {{$item->outputtime}}</li>
                    
                      @endforeach
                    </ul>
                  </div>
                  
                </div>
              </div>
              @empty

              <div class="col-md-12 col-sm-12 kb-search-content">
                <div class="card kb-hover-1">
                  
                  <div class="card-body {{-- text-center --}}">
                    <a ">
                      <div class=" mb-1 text-center">
                        <img src = "{{asset('images/drea/emoji.svg')}}" width="120px" alt="My Happy SVG"/>
                      </div>
                      
                      <h5 class="text-center text-primary font-weight-bold">Aun no hay registros de asistencia.
                        
                      </h5>
                      
                      
                    </a>
                  </div>
                  
                </div>
              </div>

            @endforelse
            </div>
          </div>
        </div>
      </section>



@section('page-scripts')
<script>
  window.livewire.on('alert', param => {
  toastr.options = {
    timeOut: 6500,
                closeButton : true,
                progressBar :true,
              };
  toastr[param['type']](param['message'],(param['title']));
  
  });
</script>
@endsection

    
</div>
