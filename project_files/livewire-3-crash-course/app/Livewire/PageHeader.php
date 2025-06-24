<?php

namespace App\Livewire;

use Livewire\Component;

class PageHeader extends Component
{

    public $name;

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.page-header');
    }
}
