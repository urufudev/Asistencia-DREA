<div>
    <div class="card">
        <!-- datatable start -->
        <div class="card-header">
            <div class="table-responsive">

                <div class="dataTables_wrapper dt-bootstrap4 no-footer ">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length">
                                <label>
                                    <select wire:model="perPage" aria-controls="example1"
                                        class="custom-select  form-control form-control-sm font-medium-1">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_filter">
                                <label>
                                    <input wire:model="search" type="search" class="form-control  font-medium-1"
                                        placeholder="Buscar..." aria-controls="example1">
                                    {{-- @if ($search != '')
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
            <table class="table table-hover mb-1 ">
                <thead>
                    <tr class="font-medium-2" style="cursor:pointer">
                        <th wire:click.prevent="sortBy('id')" class="font-medium-1 text-center">
                            ID @include('partials._sort-icon',['field'=>'id'])
                        </th>
                        <th wire:click.prevent="sortBy('name')" class="font-medium-1">

                            NOMBRE @include('partials._sort-icon',['field'=>'name'])

                        </th>

                        <th wire:click.prevent="sortBy('date')" class="font-medium-1">

                            FECHA @include('partials._sort-icon',['field'=>'date'])

                        </th>
                        <th wire:click.prevent="sortBy('userlimit')" class="font-medium-1">

                            LIMITE DE USUARIOS @include('partials._sort-icon',['field'=>'userlimit'])

                        </th>
                        <th wire:click.prevent="sortBy('start')" class="font-medium-1">

                            HORA INICIO @include('partials._sort-icon',['field'=>'start'])

                        </th>
                        <th wire:click.prevent="sortBy('end')" class="font-medium-1">

                            HORA FIN @include('partials._sort-icon',['field'=>'end'])

                        </th>
                        <th wire:click.prevent="sortBy('status')" class="font-medium-1 text-center">

                            ESTADO @include('partials._sort-icon',['field'=>'status'])
                        </th>

                        <th width="10%" class="text-center font-medium-1 ">
                            <b>ACCIÓNES</b>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr class="font-medium-2">
                            <td class="text-center align-middle"><b>{{ $event->id }}</b> </td>
                            <td class="align-middle">{{ $event->name }}</td>
                            <td class="align-middle">{{ $event->date->format('d/m/Y') }}</td>
                            <td class="align-middle">{{ $event->userlimit }}</td>
                            <td class="align-middle">{{ $event->start->format('d/m/Y H:i A') }}</td>
                            <td class="align-middle">{{ $event->end->format('d/m/Y H:i A') }}</td>
                            <td class="text-center ">
                                @if ($event->status == 'ACTIVO')
                                    <div class="badge badge-success text-bold-600">ACTIVO</div>

                                @elseif($event->status == 'INACTIVO')
                                    <div class="badge badge-danger text-bold-600">INACTIVO</div>

                                @endif
                            </td>
                            <td class="text-bold-600 text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    @can('view', $event)
                                        <a href="{{ route('events.show', $event->id) }}" class="btn btn-icon btn-info"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Ver">
                                            <i class="bx bx-show"></i>
                                        </a>
                                    @endcan
                                    @can('update', $event)
                                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-icon btn-success"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Editar">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                    @endcan



                                    @can('forceDelete', $event)
                                        <a style="cursor:pointer" wire:click="status({{ $event }})"
                                            class="btn btn-icon btn-secondary" data-placement="top" data-toggle="tooltip"
                                            title="Cambiar Estado">
                                            <i class="bx bx-git-compare white"></i>
                                        </a>
                                        <a style="cursor:pointer" data-target="#modal-delete-{{ $event->id }}"
                                            data-toggle="modal" class="btn btn-icon btn-danger" data-placement="top"
                                            data-toggle="tooltip" title="Eliminar">
                                            <i class="bx bx-trash-alt white"></i>
                                        </a>
                                    @endcan
                                    <a href="{{ route('events.pdf', $event->id) }}" target="_blank"
                                        class="btn btn-icon btn-warning" data-toggle="tooltip" data-placement="top"
                                        data-original-title="Imprimir">
                                        <i class="bx bx-file-find"></i>
                                    </a>
                                </div>

                            </td>
                            <div>@include('events.modal')</div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- datatable ends -->
        @if ($events->count())
            <div class="card-footer">
                {{-- Viewing {{ $events->firstItem() }} - {{ $events->lastItem() }} of {{ $events->total() }} entries --}}
                {{ $events->links('partials.custom-pagination') }}
            </div>

        @else
            <div class="card-footer text-center">

                <img src="{{ asset('images/drea/emoji.svg') }}" width="120px" alt="My Happy SVG" />
                <div class="text-primary font-weight-bold text-center mt-2 fs-16">No hay resultados para la búsqueda
                    "{{ $search }}" en la página {{ $page }} al mostrar {{ $perPage }} por página
                </div>
            </div>
        @endif
    </div>
</div>
