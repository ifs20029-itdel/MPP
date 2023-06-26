<?php

namespace App\View\Components;

use Illuminate\View\Component;

class webAdmin extends Component
{
    public $title;
    public function __construct($title = null)
    {
        $this->title = $title ?? 'MPP';
    }

    public function render()
    {
        return view('theme.admin.index');
    }
}