<div>
    

    

    <div class="col-md-4 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Reporte de Trabajo Presencial</h4>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="reportMonth" class="form">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-icon">Mes</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="month" id="first-name-icon" class="form-control" wire:model.defer="date_report"
                                            name="date_report">

                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-icon">Condición Laboral x</label>

                                   {{--  @foreach($departments as $department)
                                        <option value="{{ $department->id }}" >{{ $department->name }}</option>
                                    @endforeach --}}

                                    {{Form::select('condition_id',$conditions,null,['wire:model.defer'=>'condition_id','class'=>'form-control select2','autocomplete'=>'off','placeholder' => 'Seleccione'])}}
                                
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="first-name-icon">Oficina</label>

                                   {{--  @foreach($departments as $department)
                                        <option value="{{ $department->id }}" >{{ $department->name }}</option>
                                    @endforeach --}}

                                    {{Form::select('office_id',$offices,null,['wire:model.defer'=>'office_id','class'=>'form-control select2','autocomplete'=>'off','placeholder' => 'Seleccione'])}}
                                
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" {{-- wire:click="reportMonth" --}} class="btn btn-primary mr-1">Buscar</button>
                                <button wire:click="reportMonthExcel" class="btn btn-light-secondary">Imprimir todo</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($users != null)
        <div class="col-md-12">

            @forelse ($users as $office => $chunk)
                <div class="card lg:w-50 xl:w-50 md:w-50">

                    <div class="card-header  align-center">

                        <h3>{{ $office }}</h3>

                    </div>


                    <div class="card-body text-uppercase">
                        <table class="table table-sm table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 85px">Trabajadores/Fechas</th>
                                    @for ($i = 1; $i <= $daysInMonth; $i++)
                                        <th style="width: 5px">{{ $i }}</th>
                                    @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($chunk as $userp)
                                    <tr>
                                        <td>{{ $userp->user->full_name }}</td>
                                        @for ($i = 1; $i <= $daysInMonth; $i++)
                                            <td style="width: 5px">

                                                <input type="checkbox" name="user_{{ $userp->user->id }}[]"
                                                    value="{{ $day = now()->setYear($year)->setMonth($month)->setDay($i)->format('Y-m-d') }}"
                                                    {{ isset($presencialworks[$userp->user->id][$day]) ? 'checked' : '' }}>
                                            </td>
                                        @endfor
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                
            @empty
            Sin resultados
            @endforelse

            
        </div>
    @endif
    
</div>
