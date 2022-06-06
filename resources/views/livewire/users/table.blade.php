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
                                        class="custom-select  form-control  font-medium-1">
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
                        <th wire:click.prevent="sortBy('users.id')" class="font-medium-1 text-center">
                            ID @include('partials._sort-icon',['field'=>'users.id'])
                        </th>

                        <th wire:click.prevent="sortBy('users.name')" class="font-medium-1">

                            NOMBRE @include('partials._sort-icon',['field'=>'name'])

                        </th>
                        <th wire:click.prevent="sortBy('dni')" class="font-medium-1">

                            DNI @include('partials._sort-icon',['field'=>'dni'])

                        </th>

                        <th wire:click.prevent="sortBy('offices.name')" class="font-medium-1">

                            OFICINA @include('partials._sort-icon',['field'=>'offices.name'])

                        </th>
                        <th wire:click.prevent="sortBy('users.status')" class="font-medium-1 text-center">

                            ESTADO @include('partials._sort-icon',['field'=>'users.status'])
                        </th>

                        <th width="10%" class="text-center font-medium-1 ">
                            <b>ACCIÓNES</b>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="font-medium-2">
                            <td class="text-center align-middle"><b>{{ $user->id }}</b> </td>

                            <td class="align-middle">{{ $user->fullnamea }}</td>
                            <td class="align-middle">{{ $user->dni }}</td>
                            <td class="align-middle">{{ $user->office->name }}</td>
                            <td class="text-center ">
                                @if ($user->status == 'ACTIVO')
                                    <div class="badge badge-success text-bold-600">ACTIVO</div>

                                @elseif($user->status == 'SUSPENDIDO')
                                    <div class="badge badge-danger text-bold-600">SUSPENDIDO</div>

                                @endif
                            </td>
                            <td class="text-bold-600 text-center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    @can('show', $user)
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-icon btn-info"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Perfil">
                                            <i class="bx bx-show"></i>
                                        </a>
                                    @endcan
                                    @can('update', $user)
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-icon btn-success"
                                            data-toggle="tooltip" data-placement="top" data-original-title="Editar">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                    @endcan
                                    @can('update', $user)
                                        <a href="{{ route('edit-profile', $user->id) }}"
                                            class="btn btn-icon btn-secondary" data-toggle="tooltip" data-placement="top"
                                            data-original-title="Editar Perfil">
                                            <i class="bx bx-user-circle"></i>
                                        </a>
                                    @endcan
                                    @can('forceDelete', $user)
                                        <a style="cursor:pointer" data-target="#modal-delete-{{ $user->id }}"
                                            data-toggle="modal" class="btn btn-icon btn-danger" data-placement="top"
                                            data-toggle="tooltip" title="Eliminar">
                                            <i class="bx bx-trash-alt white"></i>
                                        </a>
                                    @endcan
                                </div>

                            </td>
                            <div>@include('users.modal')</div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        <!-- datatable ends -->
        @if ($users->count())
            <div class="card-footer">
                {{-- Viewing {{ $users->firstItem() }} - {{ $users->lastItem() }} of {{ $users->total() }} entries --}}
                {{ $users->links('partials.custom-pagination') }}
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
