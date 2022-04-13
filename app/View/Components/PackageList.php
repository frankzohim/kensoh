<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PackageList extends Component
{

    public $description;
    public $lenght;
    public $width;
    public $weight;
    public $departure;
    public $destination;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($description,$lenght,$width,$weight,$departure,$destination)
    {
        $this->description=$description;
        $this->lenght=$lenght;
        $this->width=$width;
        $this->weight=$weight;
        $this->departure=$departure;
        $this->destination=$destination;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.package-list');
    }
}
