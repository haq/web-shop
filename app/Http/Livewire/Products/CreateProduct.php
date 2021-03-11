<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;

    public string $title = '';
    public string $description = '';
    public int $price = 0;
    public int $stock = 0;
    public $image;

    protected array $rules = [

    ];

    public function submit()
    {
        dd(1);
    }

    public function render()
    {
        return view('livewire.products.create-product')
            ->layout('layouts.app');
    }
}
