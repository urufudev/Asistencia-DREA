<div>
    <div class="card">
        <!-- datatable start -->
        <div class="card-header">
          <div class="table-responsive">
              
              <div class="dataTables_wrapper dt-bootstrap4 no-footer ">
                  <div class="row">
                      <div class="col-sm-12 col-md-6">
                         <div class="dataTables_length" >
                            <label>
                               <select wire:model="perPage" aria-controls="example1" class="custom-select form-control font-medium-1">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                               </select>
                            </label>
                         </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                         <div  class="dataTables_filter">
                             <label>
                                 <input wire:model="search" type="search" class="form-control  font-medium-1" placeholder="Buscar..." aria-controls="example1">
                                 {{-- @if($search != '')
                                 <a wire:click="clear">
                                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        
                                 </a>
                    
                                @endif --}}
                                </label>
                            </div>
                      </div>
                   </div>
              </div>
          </div>
        </div>
        <div class="table-responsive">
          <table  class="table table-hover mb-1 ">
            <thead>
              <tr class="font-medium-2" style="cursor:pointer">
                <th wire:click.prevent="sortBy('id')" class="font-medium-1 text-center"  >
                    ID @include('partials._sort-icon',['field'=>'id'])
                </th>            
                <th wire:click.prevent="sortBy('name')" class="font-medium-1" >
                    
                    NOMBRE @include('partials._sort-icon',['field'=>'name'])
                    
                </th>

                <th wire:click.prevent="sortBy('description')" class="font-medium-1">
                    
                    DESCRIPCION @include('partials._sort-icon',['field'=>'description'])
                    
                </th >
                <th wire:click.prevent="sortBy('status')"  class="font-medium-1 text-center">
                    
                    ESTADO @include('partials._sort-icon',['field'=>'status'])
                </th>

                <th  width="10%" class="text-center font-medium-1 ">
                    <b>ACCIÓNES</b> </th>
              </tr>
            </thead>
            <tbody>
                @foreach($offices as $office)
              <tr class="font-medium-2"> 
                <td class="text-center align-middle"><b>{{ $office->id }}</b> </td>
                <td class="align-middle">{{ $office->name }}</td>
                <td class="align-middle">{{ $office->description }}</td>
                <td class="text-center ">
                    @if($office->status=='ACTIVO')
                    <div class="badge badge-success text-bold-600">ACTIVO</div>
                    
                    @elseif($office->status=='INACTIVO')
                    <div class="badge badge-danger text-bold-600">INACTIVO</div>
                    
                    @endif
                </td>
                <td class="text-bold-600 text-center">
                    <div class="btn-group" role="group" aria-label="Basic example">
                      @can('update', $office)    
                      <a href="{{route('offices.edit',$office->id)}}" class="btn btn-icon btn-success" data-toggle="tooltip" data-placement="top" data-original-title="Editar">
                          <i class="bx bx-edit"></i>
                        </a>
                       @endcan 
                        @can('forceDelete', $office)  
                        <a style="cursor:pointer" data-target="#modal-delete-{{$office->id}}" data-toggle="modal" class="btn btn-icon btn-danger" data-placement="top" data-toggle="tooltip" title="Eliminar" >
                          <i class="bx bx-trash-alt white"></i>
                        </a>
                       @endcan 
                      </div>

                </td>
                <div >@include('offices.modal')</div>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- datatable ends -->
         @if($offices->count())
            <div class="card-footer">
{{--                 Viewing {{ $offices->firstItem() }} - {{ $offices->lastItem() }} of {{ $offices->total() }} entries
 --}}
                {{ $offices->links('partials.custom-pagination') }}
            </div>
            
            @else
            <div class="card-footer text-center">
              <img src = "{{asset('images/drea/emoji.svg')}}" width="120px" alt="My Happy SVG"/>

                <div class="text-primary font-weight-bold text-center mt-2 fs-16">No hay resultados para la búsqueda "{{$search}}" en la página {{$page}} al mostrar {{$perPage}} por página</div>
            </div>
            @endif
      </div>
</div>
