<?php

namespace App\Http\Livewire\Presencials;

use Carbon\Carbon;
use App\Models\Event;

use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use App\Models\PresencialWork;
use PhpParser\Node\Expr\Empty_;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Presencial\StoreRequest;
use App\Mail\ConfirmEventMailable;

class Table extends Component
{


    /*-----------------DATATABLE -----------------*/
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search' => ['except' => ''],
        'perPage'
    ];

    public $isOpen = false;
    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = true;
    public $search = '';
    public $presencialcount = '';

    /* public $presencial_data=''; */

    public $feber = null;
    public $respire = null;
    public $fleme = null;
    public $olfate = null;
    public $personscovid = null;
    public $medicine = null;
    public $name_medicine = null;

    public $control;

    protected $rules = [
        'feber' => 'required',
        'respire' => 'required',
        'fleme' => 'required',
        'olfate' => 'required',
        'personscovid' => 'required',
        'medicine' => 'required',
    ];

    protected $validationAttributes = [
        'feber' => 'fiebre',
        'respire' => 'respiración',
        'fleme' => 'flema',
        'olfate' => 'olfato',
        'personscovid' => 'personas contagiadas',
        'medicine' => 'medicina',
    ];

    public function render()
    {
        /* dd(request()->getRequestUri()); */
        /* $this->control = 0; */

        $user = Auth::user();

        /* dd($user->profile->condition->id); */

        /* $presencials = Event::query()
            ->search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')
            ->paginate($this->perPage); */
        $presencialsDates = Event::where('status', 'ACTIVO')
            /* ->with('conditions')*/
            ->whereHas('conditions', function ($query) use ($user) {
                return $query->where('condition_id', $user->profile->condition->id);
            })
            ->orderBy('date', 'asc')
            ->get()
            ->groupBy(function ($presencial) {
                return Carbon::parse($presencial->date)->isoformat('ddd D MMM');
            });




        /* $eventdetails = PresencialWork::where('event_id',$presencial->id)
            ->get();

            dd($presencialsDates); */


        return view('livewire.presencials.table', compact('presencialsDates'));
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = 10;
    }



    public function register(Event $presencial)
    {

        /* dd($this->presencial_data); */

        $countpresencialworks =  PresencialWork::where('event_id', $presencial->id)->count();

        /* dd($countpresencialworks); */
        if ($countpresencialworks <= $presencial->userlimit) {

            $presencialworks = PresencialWork::where('user_id', Auth::user()->id)
                ->where('event_id', $presencial->id)
                ->first();

            if ($presencialworks == null) {

                $validatedData = $this->validate($this->rules);
                $presencial->presencialworks()->create([
                    'event_id' => $presencial->id,
                    'user_id' => Auth::user()->id,
                    'office_id' => Auth::user()->office->id,

                    'feber' => $this->feber,
                    'respire' => $this->respire,
                    'fleme' => $this->fleme,
                    'olfate' => $this->olfate,
                    'personscovid' => $this->personscovid,
                    'medicine' => $this->medicine,
                    'name_medicine' => $this->name_medicine,

                ]);

                /* dd($this->feber); */
                /* $presencial->save(); */
                $user = Auth::user();
                $event = $presencial;

                Mail::to($user)->send(new ConfirmEventMailable($user, $event));


                $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
                session()->flash('success', 'Te registraste correctamente.');
                return redirect()->to('/presencials' . $url);
            } elseif ($presencialworks !== null) {
                $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";

                session()->flash('danger', 'Ya te encuentras registrado' . $presencial->id);
                return redirect()->to('/presencials' . $url);
            }
        } else {
            $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";

            session()->flash('danger', 'Ya se supero el limite de ' . $presencial->userlimit . ' trabajadores.');
            return redirect()->to('/presencials' . $url);
        }





        /* $presencialworks = PresencialWork::where('user_id' , $presencial->id)
        ->get();


       
        foreach ($presencialworks as $presencialwork) {
           
            session()->flash('danger', $presencialwork->user_id);
            
            if($presencialwork->user_id ==  Auth::user()->id AND $presencialwork->event_id == $presencial->id){
                
                
                $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
                    session()->flash('danger', 'Ya te encuentras registrado xd');
                    return redirect()->to('/presencials'.$url);

            }
            elseif($presencialwork->user_id !=  Auth::user()->id AND $presencialwork->event_id != $presencial->id){
                $presencial->presencialworks()->create([
                    'event_id' => $presencial->id,
                    'user_id' => Auth::user()->id,
                    'office_id'=>Auth::user()->office->id,
                    
                ]);
        
                $presencial->save();
        
                $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
                    session()->flash('success', 'Te registraste correctamente.');
                    return redirect()->to('/presencials'.$url);
                
            }
            else{
                echo 'xd';
            }
        } */
    }

    public function destroy(Event $presencial)
    {
        /* dd($presencial); */
        Gate::authorize('deleteAttendance', 'Models\PresencialWork');
        $presencialworks = PresencialWork::where('user_id', Auth::user()->id)
            ->where('event_id', $presencial->id)
            ->first();

        $presencialworks->delete();
        session()->flash('danger', 'Se elimino el registro correctamente.');
        return redirect()->to('/presencials');
    }
}
