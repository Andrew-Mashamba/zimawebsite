<?php

namespace App\Livewire\Audit;

use Livewire\Component;

class Dashboard extends Component
{
    public $tab_id;

    public function render()
    {
        return view('livewire.audit.dashboard');
    }


    public function menuItemClicked($id){
        $this->tab_id=$id;
    }
}
