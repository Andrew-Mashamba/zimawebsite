<?php

namespace App\Livewire\Sidebar;

use Livewire\Component;

class Sidebar extends Component
{

    public $menuItems=[];
    public $divVisible=true;
    public $tab_id=0;
    public function render()
    {
        return view('livewire.sidebar.sidebar');
    }


    public function menuItemClicked($id){
        $this->dispatch('menu_id',$id);
    }
}
