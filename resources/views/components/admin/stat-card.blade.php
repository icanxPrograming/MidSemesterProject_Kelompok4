@php
    $accentClasses = [
        'sky' => 'bg-sky-500/10 text-sky-600 dark:text-sky-200 border-sky-500/20',
        'emerald' => 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-200 border-emerald-500/20',
        'amber' => 'bg-amber-500/10 text-amber-600 dark:text-amber-200 border-amber-500/20',
        'rose' => 'bg-rose-500/10 text-rose-600 dark:text-rose-200 border-rose-500/20',
    ];
    $accent = $accentClasses[$accent] ?? $accentClasses['sky'];
@endphp

<div class="rounded-[30px] border px-6 py-6 shadow-xl shadow-slate-950/20 {{ $accent }}">
    <p class="text-sm font-medium uppercase tracking-[0.24em] text-slate-200">{{ $title }}</p>
    <p class="mt-4 text-3xl font-semibold text-white">{{ $value }}</p>
    <p class="mt-2 text-sm text-slate-300">{{ $description }}</p>
</div>