
    <div class="card-header">
        <h4 class="card-title">Datos Personales</h4>
      </div>
      <div class="card-body">
  
          <div class="form-body">
            <div class="row">

                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label">Oficina</label>
                    {{Form::select('office_id',$offices,null,['class'=>'form-control select2','autocomplete'=>'off'])}}
                    @error('office_id')
                    <div class="text-danger fs-15  mt-1">{{$message}}</div>
                    @enderror 
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label">Régimen Laboral</label>
                    {{Form::select('laboral_id',$laborals,$user->profile->laboral_id,['class'=>'form-control select2','autocomplete'=>'off'])}}
                    @error('laboral_id')
                    <div class="text-danger fs-15  mt-1">{{$message}}</div>
                    @enderror 
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label">Régimen Pensionario</label>
                    {{Form::select('pension_id',$pensions,$user->profile->pension_id,['class'=>'form-control select2','autocomplete'=>'off'])}}
                    @error('pension_id')
                    <div class="text-danger fs-15  mt-1">{{$message}}</div>
                    @enderror 
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label">Cargo</label>
                    {{Form::select('position_id',$positions,$user->profile->position_id,['class'=>'form-control select2','autocomplete'=>'off'])}}
                    @error('position_id')
                    <div class="text-danger fs-15  mt-1">{{$message}}</div>
                    @enderror 
                  </div>
                </div>

                <div class="col-6">
                  <div class="form-group">
                    <label class="form-label">Condición Laboral</label>
                    {{Form::select('condition_id',$conditions,$user->profile->condition_id,['class'=>'form-control select2','autocomplete'=>'off'])}}
                    @error('condition_id')
                    <div class="text-danger fs-15  mt-1">{{$message}}</div>
                    @enderror 
                  </div>
                </div>
          
              </div>
          </div>
          
      </div>
      
      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end ">
          <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Actualizar 
              <i class="bx bx-exit"></i>
          </button>
          
      </div>