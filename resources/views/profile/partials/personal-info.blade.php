
    <div class="card-header">
      <h4 class="card-title">Datos Personales</h4>
    </div>
    <div class="card-body">

        <div class="form-body">
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="form-group">
                <label class="form-label">DNI</label>
                <input type="text" class="form-control @error('dni') is-invalid @enderror" name="dni"  maxlength="8" value="{{old('dni', $user->dni)}}" autocomplete="off">
                @error('dni')
                    <div class="text-danger fs-15 ">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 col-md-8">
              <div class="form-group">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control bestupper @error('name') is-invalid @enderror" name="name" value="{{old('name', $user->name)}}"  autocomplete="off">
                @error('name')
                    <div class="text-danger fs-15">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control bestupper @error('ap_paterno') is-invalid @enderror" name="ap_paterno" value="{{old('ap_paterno', $user->ap_paterno)}}"  autocomplete="off">
                @error('ap_paterno')
                    <div class="text-danger fs-15">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label">Apellido Materno</label>
                <input type="text" class="form-control bestupper @error('ap_materno') is-invalid @enderror" name="ap_materno" value="{{old('ap_materno', $user->ap_materno)}}"  autocomplete="off">
                @error('ap_materno')
                    <div class="text-danger fs-15">{{$message}}</div>
                @enderror
              </div>
            </div>
            
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{old('birthday', date('Y-m-d', strtotime( $user->profile->birthday)))}}"  autocomplete="off">
                @error('birthday')
                    <div class="text-danger fs-15">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="form-group">
                <label class="form-label">Celular</label>
                <input type="text" class="form-control bestupper @error('phone') is-invalid @enderror" name="phone" value="{{old('phone', $user->profile->phone)}}"  autocomplete="off" maxlength="9">
                @error('phone')
                    <div class="text-danger fs-15">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <label class="d-block">SEXO</label>
                


                <div class="custom-control-inline">
                  <div class="radio mr-1">
                    <input type="radio" name="genre" id="MASCULINO"  value="MASCULINO"  {{ (old('sexo',$user->profile->genre) == "MASCULINO") ? "checked" : ""}}>
                    <label for="MASCULINO">MASCULINO</label>
                  </div>
                  <div class="radio">
                    <input type="radio" name="genre" id="FEMENINO" value="FEMENINO" {{ (old('sexo',$user->profile->genre) == "FEMENINO") ? "checked" : ""}}>
                    <label for="FEMENINO">FEMENINO</label>
                  </div>
                

                </div>
                @error('genre')
                    <div class="text-danger fs-15">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="col-12">
              <div class="form-group">
                <label class="form-label">Correo Electronico</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $user->email)}}"  autocomplete="off">
                @error('email')
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