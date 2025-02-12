<?php

namespace App\Livewire\Audit;

use Livewire\Component;
use Livewire\WithFileUploads;

class ItemList extends Component
{

    use WithFileUploads;

    public $file;
    public $preview;

    public function updatedFile()
    {
        $this->validate([
            'file' => 'image|max:1024', // 1MB Max
        ]);

        $this->preview = $this->file->temporaryUrl();
    }


    public function render()
    {
        return view('livewire.audit.item-list');
    }
}
