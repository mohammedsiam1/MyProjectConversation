<?php

namespace App\Http\Livewire\Confarzations;

use Livewire\Component;
use App\Models\Confarzation;
use Illuminate\Support\Collection;

class ConfarzationMessages extends Component
{
    public $confarzation;
    public $messages;
    public function mount(Confarzation $confarzation, Collection $messages){
 $this->confarzation=$confarzation;
 $this->messages=$messages;
 
    }
    public function render()
    {
        return view('livewire.confarzations.confarzation-messages');
    }
}
