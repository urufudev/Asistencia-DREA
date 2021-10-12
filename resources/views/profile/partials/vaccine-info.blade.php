
    <div class="card-header">
        <h4 class="card-title">Información de Vacunación</h4>
      </div>
      <div class="card-body">
  
        @livewire('profile.vaccine',['user'=> $user])

          
      </div>
      
      <div class="col-12 d-flex flex-sm-row flex-column justify-content-end ">
          <button type="submit" class="btn btn-primary glow mr-sm-1 mb-1">Actualizar 
              <i class="bx bx-exit"></i>
          </button>
          
      </div>