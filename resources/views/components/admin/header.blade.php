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
