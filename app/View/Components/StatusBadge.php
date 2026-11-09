<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusBadge extends Component
{
    public string $status;
    public string $badgeClass;

    public function __construct(string $status = 'Honorer')
    {
        $this->status = $status;

        $this->badgeClass = match (strtolower($status)) {
            'tetap', 'aktif' => 'bg-emerald-50 text-emerald-700 border-emerald-200',
            'kontrak' => 'bg-amber-50 text-amber-700 border-amber-200',
            default => 'bg-slate-100 text-slate-600 border-slate-200',
        };
    }

    public function render(): View|Closure|string
    {
        return view('components.status-badge');
    }
}