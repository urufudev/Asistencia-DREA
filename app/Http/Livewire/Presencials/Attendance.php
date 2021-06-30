<?php

namespace App\Http\Livewire\Presencials;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Event;
use App\Models\Office;
use Livewire\Component;
use App\Models\PresencialWork;


class Attendance extends Component
{
    public $event;


    public $dni;

    public $type;

    protected $rules = [
        'type' => 'required',
        'dni' => 'required'

    ];

    protected $validationAttributes = [
        'type' => 'Tipo de Asistencia',
        'dni' => 'DNI'
    ];

    public function mount($event)
    {
        $this->event = $event;
        
    }

    public function render(/* Event $event */)
    {
        $offices=Office::orderBy('name','ASC')
        ->where('status','=','ACTIVO')
        ->get();

        $eventdetails = PresencialWork::where('event_id',$this->event->id)
        ->with('office')
        ->get()
        ->groupBy('office_id');

        /* dd($eventdetails); */
        /* dd($this->event->presencialworks[0]->user->name);

        $participants = $this->event->presencialworks; */

        return view('livewire.presencials.attendance',compact('offices','eventdetails'));
    }

    public function save()
    {
        /* dd($this->dni); */
        $validatedData = $this->validate($this->rules);

        $user = User::where('dni',$this->dni)->first();

        /* dd($this->input); */
        /* dd($user); */
        if ($user != null) {

            $timenow =  Carbon::now();
                
            $presencialworks = PresencialWork::where('user_id' , $user->id)
            ->where( 'event_id', $this->event->id)
            ->first();

            if ($this->type == 'input') {
                
                if ($presencialworks == null) {
                    $this->emit('alert', ['type' => 'warning', 'message' => 'El usuario no se registro para la asistencia '.$user->full_name,'title'=> 'Alerta']);
                }
                elseif ($presencialworks->input != null) {
                    $this->emit('alert', ['type' => 'warning', 'message' => 'Ya tiene un registro de asistencia '.$user->full_name,'title'=> 'Alerta']);
                    
                }

                elseif ($presencialworks->input == null) {
                    $presencialworks->update(['input' => $timenow]);
                    $this->emit('alert', ['type' => 'success', 'message' => 'Se registro la asistencia de '.$user->full_name,'title'=> 'Exito']);
                }
                  
            } 

            elseif ($this->type == 'output') {
                if ($presencialworks == null) {
                    $this->emit('alert', ['type' => 'warning', 'message' => 'El usuario no se registro para la asistencia '.$user->full_name,'title'=> 'Alerta']);
                }
                elseif ($presencialworks->output != null) {
                    $this->emit('alert', ['type' => 'warning', 'message' => 'Ya tiene un registro de salida '.$user->full_name,'title'=> 'Alerta']);
                    
                }

                elseif ($presencialworks->output == null) {
                    $presencialworks->update(['output' => $timenow]);
                    $this->emit('alert', ['type' => 'success', 'message' => 'Se registro la salida de '.$user->full_name,'title'=> 'Exito']);
                }
            }
            
        
        } 
        else {
            $this->emit('alert', ['type' => 'error', 'message' => 'El usuario no se encuentra registrado','title'=> 'Error']);
        }
        
        

        $this->clear();
        return $this->dni;
    }

    public function clear()
    {
        $this->dni= '';
    }

}
