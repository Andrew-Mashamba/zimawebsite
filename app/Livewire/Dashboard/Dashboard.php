<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Dashboard extends Component
{
    public $loan_summary;
    public function render()
    {
        $this->loan_summary=[

            'disbursed'=>20,
             'Onprogress'=>30,
             'Offered'=>6,
             'completed'=>8,
             'Declined'=>78,
             'arrears'=>67,
             'Active'=>30,
             'Rejected'=>66,
             ];


        return view('livewire.dashboard.dashboard');
    }
}
