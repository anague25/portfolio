<?php

namespace App\Livewire\WebFrontend\Ui;

use Livewire\Component;

class HeroComponent extends Component
{
    public function render()
    {
        return <<<'blade'
            <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
                <div class="hero-container" data-aos="fade-in">
                <h1>Alex Smith</h1>
                <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
                </div>
            </section>
        blade;
    }
}
