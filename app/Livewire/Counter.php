<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $contador=0;

    public function incrementador(){
        $this->contador++;
    }
    public function decrementador(){
        $this->contador--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
