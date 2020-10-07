<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class UserIndex extends Component
{
    public $data;
    public function render()
    {

        $this->data = User::all();
        return view('livewire.user-index');
    }
}
