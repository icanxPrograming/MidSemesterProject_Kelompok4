@props([
    'title',
    'value',
    'accent' => 'emerald',
    'icon'
])

@php
    $colors = [
        'emerald' => 'bg-emerald-500/10 border-emerald-500/20 text-emerald-400',
        'green'   => 'bg-green-500/10 border-green-500/20 text-green-400',
        'blue'    => 'bg-blue-500/10 border-blue-500/20 text-blue-400',
        'indigo'  => 'bg-indigo-500/10 border-indigo-500/20 text-indigo-400',
        'purple'  => 'bg-purple-500/10 border-purple-500/20 text-purple-400',
        'amber'   => 'bg-amber-500/10 border-amber-500/20 text-amber-400',
        'rose'    => 'bg-rose-500/10 border-rose-500/20 text-rose-400',
        'red'     => 'bg-red-500/10 border-red-500/20 text-red-400',
        'slate'   => 'bg-slate-500/10 border-slate-500/20 text-slate-400',
    ];

    $iconBg = [
        'emerald' => 'bg-emerald-500/20 text-emerald-500',
        'green'   => 'bg-green-500/20 text-green-500',
        'blue'    => 'bg-blue-500/20 text-blue-500',
        'indigo'  => 'bg-indigo-500/20 text-indigo-500',
        'purple'  => 'bg-purple-500/20 text-purple-500',
        'amber'   => 'bg-amber-500/20 text-amber-500',
        'rose'    => 'bg-rose-500/20 text-rose-500',
        'red'     => 'bg-red-500/20 text-red-500',
        'slate'   => 'bg-slate-500/20 text-slate-500',
    ];

    $accent = $colors[$accent] ?? $colors['emerald'];
    $iconAccent = $iconBg[$accent] ?? $iconBg['emerald'];
@endphp

<div class="rounded-2xl border p-4 {{ $accent }}">
    <div class="flex items-center gap-3">
        <div class="rounded-full p-2 {{ $iconAccent }}">
            {{ $icon }}
        </div>
        <div>
            <p class="text-sm font-medium">
                {{ $title }}
            </p>
            <p class="text-2xl font-bold text-white">
                {{ $value }}
            </p>
        </div>
    </div>
</div>