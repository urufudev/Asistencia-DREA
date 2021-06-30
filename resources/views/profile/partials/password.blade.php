
    <div class="card-header">
        <h4 class="card-title">Cambiar Contraseña</h4>
      </div>
      <div class="card-body">
  
          <div class="form-body">
            {{-- <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label class="form-label">Cotraseña Actual</label>
                  <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" value="{{old('current_password')}}"  autocomplete="off" required>
                  @error('current_password')
                      <div class="text-danger fs-15">{{$message}}</div>
                  @enderror
                </div>
              </div>
            </div> --}}
            @foreach ($errors->all() as $error)
    {{ $error }}<br/>
@endforeach

            <div class="row">
              
  
              <div class="col-6">
                <div class="form-group">
                  <label class="form-label">Nueva Cotraseña</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}"  autocomplete="off" required>
                  @error('password')
                      <div class="text-danger fs-15">{{$message}}</div>
                  @enderror
                </div>
                
              </div>

              <div class="col-6">
                <div class="form-group">
                  <label class="form-label">Confirmar Cotraseña</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation"  autocomplete="off" required>
                  @error('password_confirmation')
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