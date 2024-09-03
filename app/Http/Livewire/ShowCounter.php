<?php

namespace App\Http\Livewire;

use App\Models\Counter;
use Livewire\Component;

class ShowCounter extends Component
{
    public Counter $counter;

    public function render()
    {
        return view('livewire.show-counter');
    }
}
