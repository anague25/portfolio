<?php

namespace App\Livewire\WebFrontend\Ui;

use App\Models\Hero;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class HeroComponent extends Component
{
    public function render()
    {

        // $hero = Hero::where("status","active")->first();

        return <<<'blade'
            @php

            $hero = DB::table('heroes')->where("status","active")->first();

            @endphp
            <section id="hero" class="d-flex flex-column justify-content-center align-items-center" >
                <style>
                #hero {
                    width: 100%;
                    height: 100vh;
                    background: url("assets/img/{{$hero->image}}") top center;
                    background-size: cover;
                  }

                </style>
                <div class="hero-container" data-aos="fade-in">
                <h1>{{$hero->title}}</h1>
                <p>I'm <span class="typed" data-typed-items="{{$hero->skill}}"></span></p>
                </div>
            </section>
        blade;
    }
}
