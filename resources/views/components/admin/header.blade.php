@props(['section' => 'dashboard'])

@php
    $menuTitles = [
        'dashboard' => 'Dashboard',
        'products' => 'Produk',
        'orders' => 'Pesanan',
        'users' => 'Pengguna',
        'reports' => 'Laporan',
        'settings' => 'Pengaturan',
    ];
    $sectionLabel = $menuTitles[$section] ?? 'Dashboard';
@endphp

<div class="flex flex-col gap-6 sm:flex-row sm:items-center sm:justify-between">
    <div>
        <h1 class="mt-2 text-3xl font-semibold text-white">{{ $sectionLabel }}</h1>
        <p class="mt-2 max-w-2xl text-sm text-slate-400">Kelola semua data dan laporan dalam satu
            tampilan.</p>
    </div>
    <div class="flex flex-col gap-3 sm:flex-row sm:items-center" x-data="{ isOpen: false, toggleDropdown() { this.isOpen = !this.isOpen; }, closeDropdown() { this.isOpen = false; } }">
        <div class="relative">
            <button @click="toggleDropdown" type="button"
                class="inline-flex items-center gap-3 rounded-3xl border border-slate-700 bg-slate-900 px-5 py-3 text-sm font-semibold text-white transition hover:border-slate-500 hover:bg-slate-800">
                <span
                    class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-slate-800 text-slate-100">H</span>
                <span class="text-left">
                    <span class="block text-sm">Hadi Gunawan</span>
                    <span class="block text-xs text-slate-400">Administrator</span>
                </span>
                <svg class="h-4 w-4 text-slate-400 transition-transform" :class="{ 'rotate-180': isOpen }"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M6 9l6 6 6-6" />
                </svg>
            </button>
            <div x-show="isOpen" @click.away="closeDropdown"
                x-transition:enter="transition ease-out duration-150"
                x-transition:enter-start="opacity-0 transform -translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                class="absolute right-0 z-20 mt-3 w-56 overflow-hidden rounded-3xl border border-slate-800 bg-slate-950 text-sm shadow-xl shadow-slate-950/20">
                <div class="border-b border-slate-800 px-4 py-4">
                    <p class="text-sm text-slate-400">Masuk sebagai</p>
                    <p class="mt-1 font-semibold text-white">Hadi Gunawan
                    </p>
                    <p class="text-xs text-slate-500">hadi@example.com</p>
                </div>
                <div class="flex flex-col gap-1 px-4 py-3">
                    <button type="button" onclick="alert('Logout akan dikembangkan!')"
                        class="w-full rounded-2xl bg-rose-500 px-3 py-2 text-sm font-semibold text-white transition hover:bg-rose-600">Logout
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>