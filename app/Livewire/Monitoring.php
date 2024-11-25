<?php

namespace App\Livewire;

use Livewire\Component;

class Monitoring extends Component
{
    public function render()
    {
        $sensor = \App\Models\Sensor::first();
        return view('livewire.monitoring', [
            'sensor' => $sensor
        ]);
    }
}
