<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Registration extends Component
{
    public $name;
    public $roll_number;
    public $email;
    public function render()
    {
        return view('livewire.registration');
    }

    public function submit()
    {
        dd($this->name, $this->roll_number, $this->email);
    }
}
