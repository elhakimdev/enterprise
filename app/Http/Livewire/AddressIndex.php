<?php

namespace App\Http\Livewire;

use App\Models\Locations\Province;
use App\Models\Locations\Regencie;
use App\Models\Locations\District;
use App\Models\Locations\Village;
use Livewire\Component;

class AddressIndex extends Component
{
    public $data;
    public function render()
    {
        $this->data = Province::all();
        return view('livewire.address-index');
    }
}
