<?php

namespace App\Http\Livewire\Confarzations;

use Illuminate\Support\Collection;
use Livewire\Component;

class Confarzationlist extends Component
{
    public $confarzations;
    public function mount(Collection $confarzations){
        $this->confarzations=$confarzations;
        

    }
    public function render()
    {
        return view('livewire.confarzations.confarzationlist');
    }
}
