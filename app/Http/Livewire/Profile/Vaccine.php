<?php

namespace App\Http\Livewire\Profile;

use App\Models\Profile;
use Livewire\Component;

class Vaccine extends Component
{

    public $vaccine;
    public $vaccine_first;
    public $vaccine_second;

    public $vaccineDateShow = false;
    public $selectedVaccine = null;

    public $user;

    public function mount($selectedVaccine = null){

        if($this->user != null){
            if($this->user->profile->vaccine == 'SI')
            {
                $this->vaccineDateShow = true;
            }
            else{
                $this->vaccineDateShow = false;
            }
        }

       
    }

    public function render()
    {
       
        $user = $this->user;

        return view('livewire.profile.vaccine',compact($user));
    }
}
