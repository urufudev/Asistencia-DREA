@section('vendor-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/pickers/pickadate/pickadate.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/css/pickers/daterange/daterangepicker.css') }}">
@endsection
<div class="form-body">
    <div class="form-group">
        <label>Nombre</label>
        {{ Form::text('name', null, ['class' => 'form-control bestupper', 'autocomplete' => 'off']) }}
        @error('name')
        <div class="text-danger fs-15">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Fecha</label>
        {{ Form::date('date', isset($event) ? $event->date : null, ['class' => 'form-control', 'autocomplete' => 'off'])
        }}
        @error('date')
        <div class="text-danger fs-15">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Limite de Usuarios</label>
        {{ Form::number('userlimit', null, ['class' => 'form-control', 'autocomplete' => 'off']) }}
        @error('userlimit')
        <div class="text-danger fs-15">{{ $message }}</div>
        @enderror
    </div>

    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label for="start">Hora de Habilitación</label>
                {{ Form::datetimeLocal('start', isset($event) ? $event->start : null, ['class' => 'form-control',
                'autocomplete' => 'off', 'id' => 'start']) }}
                @error('start')
                <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="end">Hora de Finalización</label>
                {{ Form::datetimeLocal('end', isset($event) ? $event->end : null, ['class' => 'form-control',
                'autocomplete' => 'off', 'id' => 'end']) }}
                @error('end')
                <div class="text-danger fs-15">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>


    <div class="form-group align-middle">
        <label>Estado</label>
        <div class="custom-switch custom-control mt-1">
            <span>

                <input type="checkbox" name="status" class="custom-control-input " id="status" @if (old('status',
                    $event->status) == 'ACTIVO') checked
                @endif>
                <label class="custom-control-label mr-1" for="status">
                </label>
                Activo
            </span>
        </div>
    </div>

    <div class="form-row  mt-2">

        <div class="col-md-12">
            <div class="pdn-15 pdn-sm-20 bdr d-flex flex-column">
                <b>
                    <p>Condición Laboral</p>
                </b>

                <div class="custom-control custom-checkbox checkbox-primary m-1">


                    <input id="selectAll" wire:model="selectAll" class="custom-control-input" type="checkbox">


                    <label class="custom-control-label" for="selectAll">
                        <em>Seleccionar Todo</em>
                    </label>
                </div>
                <div class="divider">
                    <div class="divider-text"><i class="bx bx-coffee-togo"></i></div>
                </div>


                @foreach ($conditions as $condition)
                <div class="custom-control custom-checkbox checkbox-primary m-1">

                    {!! Form::checkbox('conditions[]', $condition->id, null, ['id' => $condition->id, 'class' =>
                    'custom-control-input checkboxAll']) !!}

                    <label class="custom-control-label" for="{{ $condition->id }}">{{ $condition->name }}
                        <em>({{ $condition->description ?: 'Sin Descripcion' }})</em>
                    </label>
                </div>
                @endforeach
                {{-- {{dd($conditions);}} --}}
                {{-- @livewire('events.checkbox', ['conditions' => $conditions, 'event'=>$event]) --}}


            </div>
        </div>
    </div>




</div>
<div class="form-actions d-flex justify-content-end">
    <button type="submit" class="btn btn-primary" data-dismiss="modal">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z"
                opacity=".3" />
            <path
                d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z" />
        </svg>
        <span class="align-middle ml-25 text-bold-600">Guardar</span>
    </button>
</div>

@section('page-scripts')
{{-- <script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
<script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
<script src="{{ asset('js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script> --}}

<script type="text/javascript">
    $(document).ready(function(){
$("#selectAll").click(function(){
        if(this.checked){
            $('.checkboxAll').each(function(){
                $(".checkboxAll").prop('checked', true);
            })
        }else{
            $('.checkboxAll').each(function(){
                $(".checkboxAll").prop('checked', false);
            })
        }
    });
});
</script>
@endsection