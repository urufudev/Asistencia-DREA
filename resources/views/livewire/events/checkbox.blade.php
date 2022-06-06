<div>

    <div class="custom-control custom-checkbox checkbox-primary m-1">


        <input id="selectAll" wire:model="selectAll" class="custom-control-input" type="checkbox">


        <label class="custom-control-label" for="selectAll">
            <em>Seleccionar Todo</em>
        </label>
    </div>
    <div class="divider">
        <div class="divider-text"><i class="bx bx-coffee-togo"></i></div>
    </div>
    {{-- {{dd($conditions);}} --}}
    @foreach ($conditions as $condition)
    <div class="custom-control custom-checkbox checkbox-primary m-1">

        {{-- {!! Form::checkbox('conditions[]', $condition->id, null, ['wire:model' =>'selectedConditions','id' =>
        $condition->id, 'class' =>
        'custom-control-input']) !!}
        --}}
        {!! Form::checkbox('conditions[]', $condition->id, null, ['wire:model' =>'selectedConditions','id' =>
        $condition->id, 'class' =>
        'custom-control-input']) !!}
        {{-- {{dd($conditions)}} --}}
        {{-- <input id="{{ $condition->id }}" name="conditions[]" wire:model="selectedConditions"
            class="custom-control-input" type="checkbox" value="{{ $condition->id }}">
        --}}

        <label class="custom-control-label" wire:model="selectedConditions[]" for="{{ $condition->id }}">{{
            $condition->name }}
            <em>({{ $condition->description ?: 'Sin Descripcion' }})</em>
        </label>
    </div>

    @endforeach






</div>