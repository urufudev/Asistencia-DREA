<div>
  <div class="form-group row">
      <label for="vaccine" class="col-md-4 col-form-label text-md-right">¿Recibiste la vacuna?</label>
      
      <div class="col-md-6">
          {{-- <select wire:model="selectedDepartment" class="form-control" name="department_id">
              <option value="" selected>Selecciona un departamento</option>
              
          </select> --}}
          {{-- <div class="align-self-center p-2 bd-highlight">Aligned flex item</div>
          <label class="d-block ">SEXO</label> --}}
          <div class="custom-control-inline col-form-label">
              
              <div class="radio mr-1 radio-shadow">
                <input wire:mode="vaccine" wire:click="$set('vaccineDateShow', true)" type="radio" name="vaccine" id="SI" value="SI" 
                 @if($user !=null) {{ (old('vaccine',$user->profile->vaccine) == "SI") ? "checked" : ""}} @else {{ old('vaccine')=="SI" ? 'checked' : '' }}@endif> 
                <label for="SI">SI</label>
              </div>
              <div class="radio radio-shadow">
                <input  wire:mode="vaccine" wire:click="$set('vaccineDateShow', false)"  type="radio" name="vaccine" id="NO" value="NO"
                @if($user !=null) {{ (old('vaccine',$user->profile->vaccine) == "NO") ? "checked" : ""}} @else {{ old('vaccine')=="NO" ? 'checked' : '' }} @endif>
                <label for="NO">NO</label>
              </div>
            </div>

            
          @error('vaccine')
              <div class="text-danger fs-15 mt-1">{{$message}}</div>
          @enderror
      </div>
  </div>

  @if ($vaccineDateShow )
  <div class="form-body">
      <div class="row">
          <div class="col-6">
              <div class="form-group">
                <label class="form-label">Primera Dosis</label>
                <input type="date" class="form-control @error('vaccine_first') is-invalid @enderror" name="vaccine_first" @if($user !=null) value="{{old('vaccine_first',  $user->profile->vaccine_first)}}" @else value="{{old('vaccine_first')}}"  @endif   autocomplete="off">
                @error('vaccine_first')
                    <div class="text-danger fs-15">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label class="form-label">Segunda Dosis</label>
                <input type="date" class="form-control @error('vaccine_second') is-invalid @enderror" name="vaccine_second" @if($user !=null) value="{{old('vaccine_second',  $user->profile->vaccine_second)}}" @else value="{{old('vaccine_second')}}"  @endif autocomplete="off" >
                @error('vaccine_second')
                    <div class="text-danger fs-15">{{$message}}</div>
                @enderror
              </div>
            </div>
  
      </div>
  </div>
  
  @endif


</div>