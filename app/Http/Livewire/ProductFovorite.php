<?php

namespace App\Http\Livewire;

use App\Models\product_favorite;
use Livewire\Component;

class ProductFovorite extends Component
{

    public $product_favorite;
    public $state=[];
    public $updateMode= false;

    public function store(){

        product_favorite::create($this->state);
    }

    public function render()
    {
        return view('livewire.product-fovorite');
    }
}
