<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Cache;
class Certificate extends Component
{
    public $certificates;

    public function __construct()
    {
        $this->certificates = Cache::remember("about_certificates", config('cache.timeout'), function () {
            return \App\Models\Certificate::active()->get();
        });
    }

    public function render()
    {
        return view('components.certificate');
    }
}
