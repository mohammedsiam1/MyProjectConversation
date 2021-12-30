<?php

namespace App\Http\Livewire\Confarzations;

use App\Models\Message;
use Livewire\Component;

class ConfarzationMessage extends Component
{
    public $message;
    public function mount(Message $message){
        $this->message=$message;
    }
    public function render()
    {
        return view('livewire.confarzations.confarzation-message');
    }
}
