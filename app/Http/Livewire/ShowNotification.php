<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowNotification extends Component
{
    protected $listeners = ['SHOW_NOTIFICATION' => 'showNotification'];

    public function render()
    {
        return view('livewire.show-notification');
    }

    public function showNotification(string $key, string $message)
    {
        session()->flash($key, $message);
    }
}
