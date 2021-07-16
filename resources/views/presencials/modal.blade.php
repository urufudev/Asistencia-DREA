
<div wire:ignore.self class="modal fade text-left" id="modal-register-{{$presencial->id}}" tabindex="-1" role="dialog"
                    aria-labelledby="myModalLabel120" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="text-bold-600 " id="myModalLabel120">Declaración Jurada </h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="bx bx-x"></i>
                          </button>
                        </div>
                        {{-- <form wire:submit.prevent="register">
                          @csrf --}}

                          
                        <div class="modal-body">
                            
                            <label >Sensación de alza térmica o fiebre</label>
                            @error('feber')
                                <div class="text-danger fs-15 mt-0">{{$message}}</div>
                              @enderror 
                            <ul class="list-unstyled mb-0">
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                    <div class="radio radio-danger radio-glow">
                                        <input type="radio" id="feber_y" wire:model="feber"  value="SI">
                                        <label for="feber_y">Si</label>
                                    </div>
                                </fieldset>
                              </li>

                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="radio radio-success radio-glow">
                                      <input type="radio" id="feber_n" wire:model="feber"  value="NO">
                                      <label for="feber_n">No</label>
                                  </div>
                                </fieldset>
                              </li>
                              
                            </ul>
                            
                            <label >Tos, estornudos o dificultad para respirar</label>
                            @error('respire')
                              <div class="text-danger fs-15">{{$message}}</div>
                            @enderror
                            <ul class="list-unstyled mb-0">
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                    <div class="radio radio-danger radio-glow">
                                        <input type="radio" id="respire_y" wire:model="respire" value="SI">
                                        <label for="respire_y">Si</label>
                                    </div>
                                </fieldset>
                              </li>
                              
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="radio radio-success radio-glow">
                                      <input type="radio" id="respire_n" wire:model="respire" value="NO">
                                      <label for="respire_n">No</label>
                                  </div>
                                </fieldset>
                              </li>
                            </ul>
                            
                            <label >Expectoración o flema amarilla o verdosa</label>
                            @error('fleme')
                              <div class="text-danger fs-15">{{$message}}</div>
                            @enderror
                            <ul class="list-unstyled mb-0">
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                    <div class="radio radio-danger radio-glow">
                                        <input type="radio" id="fleme_y" wire:model="fleme"  value="SI">
                                        <label for="fleme_y">Si</label>
                                    </div>
                                </fieldset>
                              </li>
                              
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="radio radio-success radio-glow">
                                      <input type="radio" id="fleme_n" wire:model="fleme"  value="NO">
                                      <label for="fleme_n">No</label>
                                  </div>
                                </fieldset>
                              </li>
                            </ul>
                            

                            <label >Pérdida del gusto y/o del olfato</label>
                            @error('olfate')
                              <div class="text-danger fs-15">{{$message}}</div>
                            @enderror
                            <ul class="list-unstyled mb-0">
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                    <div class="radio radio-danger radio-glow">
                                        <input type="radio" id="olfate_y" wire:model="olfate"  value="SI">
                                        <label for="olfate_y">Si</label>
                                    </div>
                                </fieldset>
                              </li>
                              
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="radio radio-success radio-glow">
                                      <input type="radio" id="olfate_n" wire:model="olfate"  value="NO">
                                      <label for="olfate_n">No</label>
                                  </div>
                                </fieldset>
                              </li>
                            </ul>
                            

                            <label >Contacto con persona(s) con un caso confirmado de COVID-19</label>
                            @error('personscovid')
                              <div class="text-danger fs-15">{{$message}}</div>
                            @enderror
                            <ul class="list-unstyled mb-0">
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                    <div class="radio radio-danger radio-glow">
                                        <input type="radio" id="personscovid_y" wire:model="personscovid"  value="SI">
                                        <label for="personscovid_y">Si</label>
                                    </div>
                                </fieldset>
                              </li>
                              
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="radio radio-success radio-glow">
                                      <input type="radio" id="personscovid_n" wire:model="personscovid"  value="NO">
                                      <label for="personscovid_n">No</label>
                                  </div>
                                </fieldset>
                              </li>
                            </ul>

                            
                            <label >¿Está tomando alguna medicación?</label>
                            @error('medicine')
                              <div class="text-danger fs-15">{{$message}}</div>
                            @enderror
                            <ul class="list-unstyled mb-0">
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                    <div class="radio radio-danger radio-glow">
                                        <input type="radio" id="medicine_y" wire:model="medicine"  value="SI">
                                        <label for="medicine_y">Si</label>
                                    </div>
                                </fieldset>
                              </li>
                              
                              <li class="d-inline-block mr-2 mb-1">
                                <fieldset>
                                  <div class="radio radio-success radio-glow">
                                      <input type="radio" id="medicine_n" wire:model="medicine"  value="NO">
                                      <label for="medicine_n">No</label>
                                  </div>
                                </fieldset>
                              </li>
                            </ul>
                          </ul>

            
                          
                          @if ($medicine=="SI")
                            <input class="form-control" placeholder="Nombre de la medicina" autocomplete="off" wire:model="name_medicine" type="text">
                          @endif
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary btn-svgs btn-svg-white">
                                <svg class="svg-icon" fill="white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><rect fill="none" height="24" width="24"/><path d="M5,5v14h14V5H5z M17,15.59L15.59,17L12,13.41L8.41,17L7,15.59L10.59,12L7,8.41L8.41,7L12,10.59L15.59,7 L17,8.41L13.41,12L17,15.59z" opacity=".3"/><path d="M19,19H5V5h14V19z M3,3v18h18V3H3z M17,15.59L15.59,17L12,13.41L8.41,17L7,15.59L10.59,12L7,8.41L8.41,7L12,10.59L15.59,7 L17,8.41L13.41,12L17,15.59z"/></svg>
                                <span class="btn-svg-text">Cancelar</span>
                            </button>
                            {{-- <button>Save</button> --}}
                            
                            {{$this->control}}
                            {{-- @if ($this->feber == 'SI' || $this->respire == 'SI' || $this->fleme == 'SI' 
                            || $this->olfate == 'SI' )

                              {{$this->feber.''.$this->respire.''.$this->fleme.''.$this->olfate}}
                                
                            @endif --}}

                            {{-- @if (($this->control = 'NO')) --}}
                              <button wire:click="register({{$presencial}})" {{-- wire:click="register({{$presencial}})" --}}  class="btn btn-success btn-svgs btn-svg-white ">
                                <svg class="svg-icon" fill="white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19.77 4.93l1.4 1.4L8.43 19.07l-5.6-5.6 1.4-1.4 4.2 4.2L19.77 4.93m0-2.83L8.43 13.44l-4.2-4.2L0 13.47l8.43 8.43L24 6.33 19.77 2.1z"/></svg>
                                <span class="btn-svg-text">Aceptar</span>
                              </button>
                            {{-- @endif --}}
                            
                        {{-- </form> --}}
                        </div>
                      </div>
                    </div>
                  </div>