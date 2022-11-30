<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $name, $title;

    public function mount($title){
        $this->title = $title;
    }
    
    public function hydrate(){
     
    }

    public function updating($name, $value){
       
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
