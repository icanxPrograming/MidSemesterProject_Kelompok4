<div class="mb-8 flex flex-col gap-4 md:flex-row md:items-end md:justify-between px-2">
    <div>
        <nav class="flex mb-2" aria-label="Breadcrumb">
            <span class="text-[20px] uppercase tracking-widest text-sky-500 font-bold">Analytics</span>
        </nav>
        <h1 class="text-3xl font-bold tracking-tight text-white">Laporan Sistem</h1>
        <p class="mt-1 text-sm text-slate-400">Halo <span class="text-slate-200 font-medium">Admin</span>, berikut adalah performa operasional dan finansial saat ini.</p>
    </div>
    
    <div class="flex items-center gap-3">
        <button class="flex items-center gap-2 rounded-xl bg-slate-800/50 backdrop-blur-sm px-4 py-2.5 text-sm font-medium text-white transition-all hover:bg-slate-700 border border-slate-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
            Rentang Waktu
        </button>
        <button class="flex items-center gap-2 rounded-xl bg-sky-600 px-4 py-2.5 text-sm font-medium text-white shadow-lg shadow-sky-900/20 transition-all hover:bg-sky-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
            Unduh Laporan
        </button>
    </div>
</div>

<div class="mt-8 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
    <x-admin.stat-card title="Laporan mingguan" value="42" description="Laporan selesai" accent="emerald" />
    <x-admin.stat-card title="Pendapatan" value="Rp 120 jt" description="Laporan terakhir" accent="sky" />
    <x-admin.stat-card title="Rasio" value="76%" description="Tujuan tercapai" accent="amber" />
    <x-admin.stat-card title="Isu" value="4" description="Perlu tindakan" accent="rose" />
</div>

<div class="mt-10 grid gap-6 lg:grid-cols-2">
    
    <div class="rounded-[30px] border border-slate-800 bg-slate-900/50 backdrop-blur-md p-8 shadow-2xl shadow-slate-950/40">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="text-xl font-bold text-white">Analisis Laporan</h2>
                <p class="mt-1 text-sm text-slate-500">Distribusi status pengerjaan tim.</p>
            </div>
            <div class="rounded-full bg-slate-800 p-2 border border-slate-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" /></svg>
            </div>
        </div>

        <div class="mt-8 grid gap-4 sm:grid-cols-3">
            <div class="group relative overflow-hidden rounded-2xl bg-slate-950/40 p-5 border border-slate-800/60 transition-all hover:border-sky-500/50">
                <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Total</p>
                <p class="mt-2 text-3xl font-bold text-white tracking-tight">156</p>
                <div class="absolute -right-2 -bottom-2 h-12 w-12 rounded-full bg-sky-500/5 blur-xl group-hover:bg-sky-500/10"></div>
            </div>
            
            <div class="group relative overflow-hidden rounded-2xl bg-slate-950/40 p-5 border border-slate-800/60 transition-all hover:border-emerald-500/50">
                <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Selesai</p>
                <p class="mt-2 text-3xl font-bold text-emerald-400 tracking-tight">142</p>
                <div class="absolute -right-2 -bottom-2 h-12 w-12 rounded-full bg-emerald-500/5 blur-xl group-hover:bg-emerald-500/10"></div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl bg-slate-950/40 p-5 border border-slate-800/60 transition-all hover:border-amber-500/50">
                <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Pending</p>
                <p class="mt-2 text-3xl font-bold text-amber-400 tracking-tight">14</p>
                <div class="absolute -right-2 -bottom-2 h-12 w-12 rounded-full bg-amber-500/5 blur-xl group-hover:bg-amber-500/10"></div>
            </div>
        </div>
        
        <div class="mt-6 flex items-center gap-2 text-xs text-slate-500 bg-slate-800/30 p-3 rounded-xl border border-slate-800/50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-emerald-500" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            Efisiensi tim meningkat 12% dari bulan lalu.
        </div>
    </div>

    <div class="rounded-[30px] border border-slate-800 bg-slate-900/50 backdrop-blur-md p-8 shadow-2xl shadow-slate-950/40">
        <h3 class="text-xl font-bold text-white">Ringkasan Pengeluaran</h3>
        <p class="mt-1 text-sm text-slate-500">Alokasi anggaran departemen.</p>

        <div class="mt-8 space-y-7">
            <div class="group">
                <div class="flex items-center justify-between mb-2.5">
                    <span class="text-sm font-semibold text-slate-300 group-hover:text-white transition-colors">Operasional</span>
                    <span class="text-xs font-mono font-bold text-sky-400 bg-sky-400/10 px-2 py-0.5 rounded-md">65%</span>
                </div>
                <div class="w-full bg-slate-800 rounded-full h-2.5 overflow-hidden border border-slate-700/50">
                    <div class="bg-linear-to-r from-sky-600 to-sky-400 h-full rounded-full transition-all duration-1000 shadow-[0_0_12px_rgba(56,189,248,0.3)]" style="width: 65%"></div>
                </div>
            </div>

            <div class="group">
                <div class="flex items-center justify-between mb-2.5">
                    <span class="text-sm font-semibold text-slate-300 group-hover:text-white transition-colors">Marketing</span>
                    <span class="text-xs font-mono font-bold text-emerald-400 bg-emerald-400/10 px-2 py-0.5 rounded-md">45%</span>
                </div>
                <div class="w-full bg-slate-800 rounded-full h-2.5 overflow-hidden border border-slate-700/50">
                    <div class="bg-linear-to-r from-emerald-600 to-emerald-400 h-full rounded-full transition-all duration-1000 shadow-[0_0_12px_rgba(52,211,153,0.3)]" style="width: 45%"></div>
                </div>
            </div>

            <div class="group">
                <div class="flex items-center justify-between mb-2.5">
                    <span class="text-sm font-semibold text-slate-300 group-hover:text-white transition-colors">Pengembangan</span>
                    <span class="text-xs font-mono font-bold text-purple-400 bg-purple-400/10 px-2 py-0.5 rounded-md">80%</span>
                </div>
                <div class="w-full bg-slate-800 rounded-full h-2.5 overflow-hidden border border-slate-700/50">
                    <div class="bg-linear-to-r from-purple-600 to-purple-400 h-full rounded-full transition-all duration-1000 shadow-[0_0_12px_rgba(192,132,252,0.3)]" style="width: 80%"></div>
                </div>
            </div>
        </div>
    </div>

</div>