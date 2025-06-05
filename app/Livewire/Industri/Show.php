<?php

namespace App\Livewire\Industri;

use Livewire\Component;
use App\Models\Industri;

class Show extends Component
{
    public $industri;

    public function mount($industri)
    {
        $this->industri = Industri::findOrFail($industri);
    }

    public function render()
    {
        return view('livewire.industri.show');
    }
}
