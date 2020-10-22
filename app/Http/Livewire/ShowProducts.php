<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShowProducts extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['SHOW_NOTIFICATION' => 'showNotification'];

    public function render()
    {
        return view('livewire.show-products', [
            'products' => Product::paginate(10),
        ]);
    }

    public function showNotification(string $key, string $message)
    {
        session()->flash($key, $message);
    }
}
