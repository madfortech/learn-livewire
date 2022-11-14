<?php

namespace App\Http\Livewire;
use App\Models\demoProduct;
use Livewire\Component;

class DemoProducts extends Component
{   
    public $demoProductId;
    public $demoProduct;

    public $designTemplate = 'bootstrap';

    protected $rules = [
        'demoProduct.demoProductname' => 'required',
    ];

    public function render()
    {   
        return view('livewire.'.$this->designTemplate.'.demo-products', [
            'demo-products' => demoProduct::latest()
        ]);   
    }

    public function edit($demoProductId)
    {
      
        $this->demoProductId = $demoProductId;
        $this->demoProduct = demoProduct::find($demoProductId);
    }

    public function create()
    {

        $this->demoProduct = null;
        $this->demoProductId = null;
    }

    public function save()
    {
        $this->validate();

        if (!is_null($this->demoProductId)) {
            $this->demoProduct->save();
        } else {
            demoProduct::create($this->demoProduct);
        }
       
    }

    public function delete($demoProductId)
    {
        $demoProduct = demoProduct::find($demoProductId);
        if ($demoProduct) {
            $demoProduct->delete();
        }
    }
}
