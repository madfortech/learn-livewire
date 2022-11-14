<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\demoform;

class DemoFormvalid extends Component
{   
    public $demoname;
    public $demodescription;
    public $messageText = '';

    public $designTemplate = 'bootstrap';

    public $rules = [
        'demoname' => 'required|min:3',
        'demodescription' => 'required|min:50',
    ];


    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.demo-formvalid');
        // return view('livewire.demo-formvalid');
    }

    public function updated($key, $value)
    {
        $this->validateOnly($key);
    }

    public function save()
    {
        $this->validate();

        demoform::create([
            'demoname' => $this->demoname,
            'demodescription' => $this->demodescription,
        ]);

        $this->messageText = 'demoform ' . $this->demoname . ' is saved';
        $this->demoname = '';
        $this->demodescription = '';
    }
    
}
