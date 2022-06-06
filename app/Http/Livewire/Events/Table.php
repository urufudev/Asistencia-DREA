<?php

namespace App\Http\Livewire\Events;

use App\Models\Event;
use Livewire\Component;
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
    public $sortField = "id";
    public $sortAsc = true;
    public $search = '';
    public function render()
    {
        /* dd(request()->getRequestUri()); */

        $events = Event::query()
            ->search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'desc' : 'asc')
            ->paginate($this->perPage);

        return view('livewire.events.table', compact('events'));
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


    /*     public function destroy(Event $event)
    {

        Gate::authorize('forceDelete', $event);
        if ($event->status == 'ACTIVO') {
            $event->update(['status' => 'INACTIVO']);
            $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('danger', 'Se cambio a inactivo correctamente.');
            return redirect()->to('/events' . $url);

            
        } else {
            $event->update(['status' => 'ACTIVO']);
            $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('warning', 'Se cambio a activo correctamente.');
            return redirect()->to('/events' . $url);
            
        }
    } */


    public function destroy(Event $event)
    {

        Gate::authorize('forceDelete', $event);
        try {
            $event->delete($event);
        } catch (\Throwable $th) {
            $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('warning', 'Este registro esta siendo utilizado.');
            return redirect()->to('/events' . $url);
        }

        $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
        session()->flash('danger', 'Se elimino correctamente.');
        return redirect()->to('/events' . $url);
    }

    public function status(Event $event)
    {

        Gate::authorize('forceDelete', $event);
        if ($event->status == 'ACTIVO') {
            $event->update(['status' => 'INACTIVO']);
            $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('danger', 'Se cambio a Suspendido correctamente.');
            return redirect()->to('/events' . $url);

            /* return back()->with('info', 'SE CAMBIO A INACTIVO CORRECTAMENTE '); */
        } else {
            $event->update(['status' => 'ACTIVO']);
            $url = "?perPage={$this->perPage}&page={$this->page}&search={$this->search}";
            session()->flash('warning', 'Se cambio a Activo correctamente.');
            return redirect()->to('/events' . $url);
            /* return back()->with('warning', 'SE CAMBIO A ACTIVO CORRECTAMENTE '); */
        }
    }
}
