<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contents;

class SummaryCreate extends Component
{
    // public $data;

    // public function mount($data)
    // {
    //     // dd($data);
    //     $this->data = $data;
    // }

    public $title;
    public $description;

    public function store()
    {

        $this->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        
        // dd($this->title);
        $dataStore = Contents::create([
            'title' => $this->title,
            'description' => $this->description
        ]);

        $this->resetInput();

        $this->emit('dataStore', $dataStore);
    }

    public function resetInput()
    {
        $this->title = null;
        $this->description = null ;
    }

    public function render()
    {
        return view('livewire.summary-create');
    }
}
