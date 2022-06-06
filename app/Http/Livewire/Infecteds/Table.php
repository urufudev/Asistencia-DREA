<?php

namespace App\Http\Livewire\Infecteds;

use App\Models\User;
use Livewire\Component;
use App\Models\Infected;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Gate;

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
    public $sortField = "infecteds.id";
    public $sortAsc = true;
    public $search = '';
    public function render()
    {
        /* dd(request()->getRequestUri()); */

        $infecteds = Infected::query()
            ->with('user')
            ->search($this->search)
            /*  ->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc') */
            ->orderBy(User::select($this->sortField)->whereColumn('users.id', 'infecteds.user_id'), $this->sortAsc ? 'desc' : 'asc')
            ->paginate($this->perPage);


        /* dd($infecteds);
 */
        return view('livewire.infecteds.table', compact('infecteds'));
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


    public function destroy(Infected $infected)
    {
        /* dd($infected); */
        /* Gate::authorize('forceDelete',$infected); */
        if ($infected->status == 'ACTIVO') {
            $infected->update(['status' => 'INACTIVO']);
            $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('danger', 'Se cambio a inactivo correctamente.');
            return redirect()->to('/infecteds' . $url);

            /* return back()->with('info', 'SE CAMBIO A INACTIVO CORRECTAMENTE '); */
        } else {
            $infected->update(['status' => 'ACTIVO']);
            $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('warning', 'Se cambio a activo correctamente.');
            return redirect()->to('/infecteds' . $url);
            /* return back()->with('warning', 'SE CAMBIO A ACTIVO CORRECTAMENTE '); */
        }
    }
}
