<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReportButton extends Component
{
    public $comment;

    public function __construct($comment)
    {
        $this->comment = $comment;
    }

    public function render()
    {
        return view('components.report-button');
    }
}


