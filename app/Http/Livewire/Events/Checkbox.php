<?php

namespace App\Http\Livewire\Events;

use Livewire\Component;
use App\Models\Condition;

class Checkbox extends Component
{

    public $selectedConditions = [];

    public $conditions ;
    public $event;

    public $selectAll = false;

    public bool $bulkDisabled = true;


/*     public function mount($conditions,$event)
    {
       $this->conditions = $conditions;
       $this->event = $event;
    } */

    public function render()
    {

        $this->bulkDisabled = count($this->selectedConditions) < 1;

        /* $conditions = Condition::where('status','ACTIVO')->get(); */

        return view('livewire.events.checkbox'/* ,compact('conditions') */);
        
    }

    public function updatedSelectAll($value)
    {
        if($value){
            $this->selectedConditions = Condition::pluck('id');
        }
        else{
            $this->selectedConditions = [];
        }
    }
}
