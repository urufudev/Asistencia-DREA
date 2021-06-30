
    <div class="card-header">
        <h4 class="card-title">Dirección</h4>
      </div>
      <div class="card-body">
  
        @livewire('profile.department-province-distrite',['selectedDistrict'=> $user->profile->district_id])

        <div class="form-body">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Dirección</label>
                <input type="text" class="form-control bestupper @error('address') is-invalid @enderror" name="address" value="{{old('address',$user->profile->address)}}"   autocomplete="off">
                @error('address')
                    <div class="text-danger fs-15">{{$message}}</div>
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