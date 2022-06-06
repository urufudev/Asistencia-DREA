<div class="form-body">

    <div class="form-group">
        <label >Fecha de Diagnostico</label>
        {{Form::date('diagnosis_date',(isset($userinfected)) ? $userinfected->diagnosis_date : null,['class'=>'form-control','autocomplete'=>'off'])}}
        @error('diagnosis_date')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror
    </div>

    <div class="form-group">
        <label >Entidad de Diagnostico</label>
        
        {{Form::select('diagnosis_entity',$entitys,null,['class'=>'form-control select2','autocomplete'=>'off'])}}
        @error('diagnosis_entity')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>

    <div class="form-group">
        <label >Documento de Descanso</label>
        {{Form::text('break_number',null,['class'=>'form-control','autocomplete'=>'off'])}}
        @error('break_number')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>

    <div class="form-group">
        <label >Inicio de Descanso</label>
        {{Form::date('break_start',(isset($userinfected)) ? $userinfected->break_start : null,['class'=>'form-control','autocomplete'=>'off'])}}
        @error('break_start')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>

    <div class="form-group">
        <label >Fin de Descanso</label>
        {{Form::date('break_end',(isset($userinfected)) ? $userinfected->break_end : null,['class'=>'form-control','autocomplete'=>'off'])}}
        @error('break_end')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>

<hr>
    <div class="form-group">
        <label >Entidad de Alta</label>
        
        {{Form::select('high_entity',$entitys,null,['class'=>'form-control select2','autocomplete'=>'off'])}}
        @error('high_entity')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror 
    </div>
    <div class="form-group">
        <label >Fecha de Alta</label>
        {{Form::date('high_date',(isset($userinfected)) ? $userinfected->high_date : null,['class'=>'form-control','placeholder'=>'Seleccione','autocomplete'=>'off'])}}
        @error('high_date')
        <div class="text-danger fs-15">{{$message}}</div>
        @enderror
    </div>


   

      

</div>
<div class="form-actions d-flex justify-content-end">
    <button type="submit" class="btn btn-primary" data-dismiss="modal"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"/></svg>
        <span  class="align-middle ml-25 text-bold-600">Guardar</span>    
    </button>
</div>


{{-- <div class="modal-body">
    <form class="form">
        <div class="form-body">
            <div class="form-group">
                <label >Nombre</label>
                {{Form::text('name',null,['class'=>'form-control bestupper','autocomplete'=>'off'])}}
                @error('name')
                <div class="text-danger fs-15 mt-2">{{$message}}</div>
                @enderror 
            </div>
            <div class="form-group">
                <label>Descripción</label>
                {{Form::textarea('description',null,['class'=>'form-control bestupper','autocomplete'=>'off','rows'=>'4'])}}
                @error('description')
                    <div class="text-danger fs-15 mt-2">{{$message}}</div>
                @enderror 
            </div>
        
        </div>
    </form>
</div>
<div class="modal-footer">
    <button type="submit" class="btn btn-primary" data-dismiss="modal"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5v14h14V7.83L16.17 5H5zm7 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3zm3-8H6V6h9v4z" opacity=".3"/><path d="M17 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V7l-4-4zm2 16H5V5h11.17L19 7.83V19zm-7-7c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3zM6 6h9v4H6z"/></svg>
        <span  class="align-middle ml-25 text-bold-600">Guardar</span>    
    </button>
    
</div> --}}