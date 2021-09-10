<?php

namespace App\Http\Livewire;

use App\Models\Contents;
use Livewire\Component;

class Summary extends Component
{
    public $action;
    // public $data;
    public $dataId;

    // public function create(){
    //     Contents::create($this->data);
    // }

    // public function update(){
    //     Contents::find($this->dataId)->update($this->title);
    // }

    protected $listeners = [
        'dataStore' => 'handleStore'
    ];

    public function handleStore($dataStore)
    {
        // dd($dataStore);
        session()->flash('message', ''. $dataStore['title'] . 'was stored');
    }


    public function render()
    {
        // $this->data = Contents::all();
        return view('livewire.summary', [
            'data' => Contents::latest()->get()
        ]);
    }
}
