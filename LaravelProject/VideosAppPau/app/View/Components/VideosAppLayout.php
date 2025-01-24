<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VideosAppLayout
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Aquí puedes pasar datos al layout si los necesitas
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        // El archivo de vista donde se renderiza el layout
        return view('layouts.videos-app-layout');
    }
}
