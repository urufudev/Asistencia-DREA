<?php

namespace App\Http\Livewire\Laborals;

use App\Models\Laboral;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;

class Table extends Component
{
   

    /*-----------------DATATABLE -----------------*/
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = [
        'search'=> ['except'=> ''],
        'perPage'
    ];

    public $isOpen = false;
    public $perPage = 10;
    public $sortField = "id";
    public $sortAsc = true;
    public $search = '';
    public function render()
    {
        /* dd(request()->getRequestUri()); */

        $laborals = Laboral::query()
            ->search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')
            ->paginate($this->perPage);

        return view('livewire.laborals.table',compact('laborals'));
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
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
        $this->search= '';
        $this->page= 1;
        $this->perPage= 10;
    }


    public function destroy(Laboral $laboral)
    {
        
        Gate::authorize('forceDelete',$laboral);
        if ($laboral->status == 'ACTIVO') {
            $laboral->update(['status' => 'INACTIVO']);
            $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('danger', 'Se cambio a inactivo correctamente.');
            return redirect()->to('/laborals'.$url);
            
            /* return back()->with('info', 'SE CAMBIO A INACTIVO CORRECTAMENTE '); */
        }
        else {
            $laboral->update(['status' => 'ACTIVO']);
            $url="?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('warning', 'Se cambio a activo correctamente.');
            return redirect()->to('/laborals'.$url);
            /* return back()->with('warning', 'SE CAMBIO A ACTIVO CORRECTAMENTE '); */
        } 
    }
    
}
