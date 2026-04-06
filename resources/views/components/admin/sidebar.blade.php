@props(['active' => 'dashboard'])

<div class="flex h-full flex-col justify-between px-5 py-6 text-slate-100">
    <div class="space-y-8">
        <div class="space-y-3">
            <div class="rounded-3xl bg-slate-100 p-5 text-white shadow-xl shadow-slate-950/20">
                <p class="text-2xl uppercase tracking-[0.23em] text-slate-900 font-bold italic text-center">HBM</p>
                <div class="flex justify-center">
                    <img 
                        src="{{ asset('images/logo2.png') }}" 
                        alt="Had Black Market Logo"
                        class="h-20 w-20 object-contain"
                    >
                </div>
                <h2 class="mt-3 text-sm font-semibold text-center text-slate-900 uppercase tracking-[0.24em]">Admin Panel</h2>
            </div>
            <div class="rounded-3xl border border-slate-800 bg-slate-100 p-5 shadow-inner shadow-slate-950/20">
                <p class="text-sm font-semibold uppercase tracking-[0.24em] text-slate-600 text-center">Navigasi</p>
                <nav class="mt-5 flex flex-col gap-2">
                    @foreach([
                            'dashboard' => 'Dashboard',
                            'products' => 'Produk',
                            'orders' => 'Pesanan',
                            'users' => 'Pengguna',
                            'reports' => 'Laporan',
                            'settings' => 'Pengaturan',
                        ] as $key => $label)
                                    <a href="{{ route('admin', ['section' => $key]) }}" class="rounded-2xl px-4 py-3 text-sm font-medium transition {{ $active === $key ? 'bg-slate-800 text-white' : 'text-slate-900 hover:bg-slate-800 hover:text-white'}}">{{ $label }}</a>
                    @endforeach
                </nav>
            </div>
        </div>
    </div>
</div>