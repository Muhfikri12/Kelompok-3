<?php

namespace App\View\Components;

use Closure;
use App\Models\Geografis;
use App\ProfileDesas;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FooterLp extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $data = ProfileDesas::first();
        $desa = Geografis::first();
        return view('components.footer-lp', [
            'data' => $data,
            'desa' => $desa
        ]);
    }
}
