<?php

namespace App\Http\Livewire;

use App\Models\Contents;
use Livewire\Component;
use Symfony\Component\VarDumper\Cloner\Data;

class SummaryUpdate extends Component
{
    public $title;
    public $description;
    public $dataId;

    protected $listeners = [
        'getData' => 'showData',
    ];

    public function showData($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->dataId = $data['id'];
    }

    public function resetInput()
    {
        $this->title = null;
        $this->description = null ;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        
        if ($this->dataId){
            $dataUpdate = Contents::find($this->dataId);
            $dataUpdate->update([
                'title' => $this->title,
                'description' => $this->description,
            ]);

            $this->resetInput();

            $this->emit('dataUpdate', $dataUpdate);
        }
    }

    public function render()
    {
        return view('livewire.summary-update');
    }
}
