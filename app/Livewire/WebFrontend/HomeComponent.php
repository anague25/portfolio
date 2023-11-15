<?php

namespace App\Livewire\WebFrontend;

use Livewire\Component;
use App\Models\Skills;
use App\Models\About;

class HomeComponent extends Component
{
    public function render()
    {
        $skills = Skills::limit(5)->get();
        $skills2 = Skills::orderBy("id","desc")->limit(5)->get();
        $about = About::first();
        return view('livewire.web-frontend.home-component',["myskills"=>$skills,"myskills2"=>$skills2,"about"=>$about])->layout('layouts.base');
    }
}
