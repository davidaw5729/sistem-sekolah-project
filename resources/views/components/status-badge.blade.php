@props(['status'])

@php
    $statusLower = strtolower($status);
    $classes = match($statusLower) {
        'aktif', 'active' => 'bg-green-100 text-green-800 border-green-200',
        'nonaktif', 'inactive' => 'bg-red-100 text-red-800 border-red-200',
        'cuti', 'leave' => 'bg-yellow-100 text-yellow-800 border-yellow-200',
        default => 'bg-gray-100 text-gray-800 border-gray-200',
    };
@endphp

<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium border {{ $classes }}">
    {{ ucfirst($status) }}
</span>