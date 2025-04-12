<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;

class FrontendLayout extends Component
{
    /**
     * The view to render for the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.frontend.frontend-layout');
    }
}
