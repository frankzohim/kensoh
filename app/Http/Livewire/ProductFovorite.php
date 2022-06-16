<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductFovorite extends Component
{

    public $product_favorite;
    public $state=[];


    public function render()
    {
        return view('livewire.product-fovorite');
    }
}
