<?php

namespace App\Http\Livewire;

use App\Models\product_favorite;
use App\Models\Product;
use Livewire\Component;

class ProductFovorite extends Component
{

    public $product_favorite;
    public $state=[];
    public $updateMode= false;

    public function store($user_id,$product_id){
        $this->state=[
            $user_id,
            $product_id,
            '1'
        ];
        //product_favorite::add();
        product_favorite::add($this->state)->associate('App\Models\product');
        $this->reset('state');
        $this->product_favorite = product_favorite::all();
    }
    public function mount(Product $product)
    {
        $this->product_=$product;
    }

    public function render()
    {
        return view('livewire.product-fovorite');
    }
}
