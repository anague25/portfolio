<?php

namespace App\Livewire\WebFrontend;

use Livewire\Component;
use App\Models\Skills;

class HomeComponent extends Component
{
    public function render()
    {
        $skills = Skills::limit(5)->get();
        $skills2 = Skills::orderBy("id","desc")->limit(5)->get();
        return view('livewire.web-frontend.home-component',["myskills"=>$skills,"myskills2"=>$skills2])->layout('layouts.base');
    }
}
