<?php

namespace App\Http\Livewire;

use App\Models\Contents;
use Livewire\Component;
use Livewire\WithPagination;
use Mockery\Matcher\Contains;

class Summary extends Component
{
    // public $action;
    public $statusUpdate = false;
    public $paginate = 5;
    public $search;
    public $label;

    

    // public $data;
    // public $dataId;


    use WithPagination;


    // public function create(){
    //     Contents::create($this->data);
    // }

    // public function update(){
    //     Contents::find($this->dataId)->update($this->title);
    // }

    protected $listeners = [
        'dataStore' => 'handleStore',
        'dataUpdate' => 'handleUpdate'
    ];

    protected $updateQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function getData($id)
    {
        $this->statusUpdate = true;
        $data = Contents::find($id);
        $this->emit('getData', $data);
    }

    public function destroy($id)
    {
        if ($id){
            $dataDestroy = Contents::find($id);
            $dataDestroy->delete();

            session()->flash('message', ''. $dataDestroy['title'] . ' was deleted');
        }
    }

    public function handleStore($dataStore)
    {
        // dd($dataStore);
        session()->flash('message', ''. $dataStore['title'] . ' was stored');
    }

    public function handleUpdate($dataUpdate)
    {
        // dd($dataUpdate);
        session()->flash('message', ''. $dataUpdate['title'] . ' Swas update');
    }

    public function render()
    {
        // $this->data = Contents::all();
        return view('livewire.summary', [
            // 'data' => Contents::latest()->paginate($this->paginate)
            'data' => $this->search === null ?
            Contents::latest()->paginate($this->paginate) :
            Contents::latest()->where('title', 'like', '%' . $this->search . '%')->paginate($this->paginate)

            // 'data' => $this-> $label === null ?
            // Contents::latest()->paginate($this->paginate) :
            // Contents::latest()->where('status', 'like', '%' .$this->$search . '%')->paginate($this->$paginate)
        ]);
    }
}