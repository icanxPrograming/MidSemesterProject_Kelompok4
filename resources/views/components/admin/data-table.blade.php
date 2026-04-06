<div
    class="overflow-hidden rounded-[30px] border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-950 dark:text-slate-100 shadow-xl shadow-slate-950/10 dark:shadow-slate-950/20">
    <div
        class="flex flex-col gap-4 border-b border-slate-200 dark:border-slate-700 px-6 py-5 md:flex-row md:items-center md:justify-between">
        <div>
            <h2 class="text-xl font-semibold text-slate-950 dark:text-white">{{ $title }}</h2>
            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Ringkasan aktivitas terbaru dan pembaruan penting
                dari sistem.</p>
        </div>
        <button
            class="inline-flex items-center justify-center rounded-3xl bg-slate-950 dark:bg-slate-800 px-4 py-2 text-sm font-semibold text-white dark:text-slate-100 transition hover:bg-slate-800 dark:hover:bg-slate-700">
            Export CSV
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-slate-200 dark:divide-slate-700 text-left text-sm">
            <thead
                class="bg-slate-50 dark:bg-slate-800 text-slate-500 dark:text-slate-400 uppercase tracking-[0.16em] text-[11px]">
                <tr>
                    <th class="px-6 py-4">Kegiatan</th>
                    <th class="px-6 py-4">Pengguna</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4">Tanggal</th>
                </tr>
            </thead>
            <tbody
                class="divide-y divide-slate-200 dark:divide-slate-700 bg-white dark:bg-slate-900 text-slate-700 dark:text-slate-300">
                <tr>
                    <td class="px-6 py-4">Login berhasil</td>
                    <td class="px-6 py-4">Rina Putri</td>
                    <td class="px-6 py-4 text-emerald-600 dark:text-emerald-400">Selesai</td>
                    <td class="px-6 py-4">30 Mar 2026</td>
                </tr>
                <tr class="bg-slate-50 dark:bg-slate-800">
                    <td class="px-6 py-4">Pesanan baru</td>
                    <td class="px-6 py-4">Bayu Santoso</td>
                    <td class="px-6 py-4 text-sky-600 dark:text-sky-400">Diproses</td>
                    <td class="px-6 py-4">30 Mar 2026</td>
                </tr>
                <tr>
                    <td class="px-6 py-4">Perbarui profil</td>
                    <td class="px-6 py-4">Anisa Rahma</td>
                    <td class="px-6 py-4 text-slate-600 dark:text-slate-400">Menunggu</td>
                    <td class="px-6 py-4">29 Mar 2026</td>
                </tr>
                <tr class="bg-slate-50 dark:bg-slate-800">
                    <td class="px-6 py-4">Peringatan sistem</td>
                    <td class="px-6 py-4">Tim Admin</td>
                    <td class="px-6 py-4 text-rose-600 dark:text-rose-400">Perhatian</td>
                    <td class="px-6 py-4">28 Mar 2026</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>