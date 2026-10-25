<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.site')]
class Home extends Component
{
    public function render()
    {
        return view('livewire.home', [
            'heroImages' => config('site-content.hero_images'),
            'fleet' => config('site-content.fleet'),
            'services' => config('site-content.services'),
        ])->layoutData([
            'seoTitle' => config('seo.defaults.title'),
            'seoDescription' => config('seo.defaults.description'),
            'canonicalUrl' => route('home'),
            'seoImage' => config('seo.defaults.image'),
        ]);
    }
}
