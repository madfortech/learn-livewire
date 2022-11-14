<?php

namespace App\Http\Livewire;
use App\Models\demoCity;
use App\Models\demoCompany;
use App\Models\demoCountry;
use App\Models\demoState;
use Livewire\Component;

class DemoCompanies extends Component
{   
    public $democountries;
    public $demostates;
    public $democities;

    public $demoname;
    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;

    public $designTemplate = 'bootstrap';
    
    public function mount()
    {
        $this->democountries = demoCountry::all();
        $this->demostates = collect();
        $this->democities = collect();
    }



    public function render()
    {   
        return view('livewire.'. $this->designTemplate .'.demo-companies', [
            'demo-companies' => demoCompany::with('city.state.country')->latest()->take(5)->get()
        ]);
        // return view('livewire.demo-companies');
    }

    public function updatedSelectedCountry($value)
    {
        $this->demostate = demoState::where('country_id', $value)->get();
        $this->selectedState = null;
    }
    
    public function updatedSelectedState($value)
    {
        if (!is_null($value)) {
            $this->democity = demoCity::where('state_id', $value)->get();
        }
    }
    
    public function storeCompany()
    {
        $this->validate([
            'demoname' => 'required',
            'selectedCity' => 'required',
        ]);

        demoCompany::create([
            'demoname' => $this->demoname,
            'city_id' => $this->selectedCity,
        ]);

        $this->demoname = '';
        $this->selectedCountry = null;
        $this->selectedState = null;
        $this->selectedCity = null;
        $this->demostate = collect();
        $this->democity = collect();
    }



}
