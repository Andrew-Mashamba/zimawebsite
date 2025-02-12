<?php

namespace App\Livewire;

use Livewire\Component;

class System extends Component
{
    public $page_id=0;
   protected $listeners=['menu_id'=>"menuChecked"];

    public function render()
    {
        return view('livewire.system');
    }


    public function menuChecked($id){

       $this->page_id=$id;
    }
}
