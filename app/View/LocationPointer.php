<?php

namespace App\View\Components;
use Illuminate\View\Component;

class LocationPointer extends Component
{
    public $name;
    public $titikUkur;
    public $imageUrl;

    public function __construct($name, $titikUkur, $imageUrl = '')
    {
        $this->name = $name;
        $this->titikUkur = $titikUkur;
        $this->imageUrl = $imageUrl;
    }

    public function render()
    {
        return view('components.location-pointer');
    }
}
