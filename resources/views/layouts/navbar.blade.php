{{-- Navbar Top --}}
<nav class="navbar navbar-top fixed-top bg-primary text-white">
    <div class="container">
        {{-- Navbar Brand --}}
        <a class="d-inline navbar-brand text-white" href="#">
            {{-- title --}}
            <span class="fs-4 text-uppercase">Sistem Informasi Apotek</span>
        </a>
    </div>
</nav>

{{-- Navbar Menu --}}
<nav class="navbar navbar-menu fixed-top navbar-expand-lg bg-light shadow-lg-sm">
    <div class="container">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <x-navbar-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <i class="ti ti-home align-text-top me-1"></i> Beranda
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('categories.index') }}" :active="request()->routeIs('categories.*')">
                        <i class="ti ti-category align-text-top me-1"></i> Kategori
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('products.index') }}" :active="request()->routeIs('products.*')">
                        <i class="ti ti-copy align-text-top me-1"></i> Produk
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('customers.index') }}" :active="request()->routeIs('customers.*')">
                        <i class="ti ti-users align-text-top me-1"></i> Pelanggan
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('transactions.index') }}" :active="request()->routeIs('transactions.*')">
                        <i class="ti ti-folders align-text-top me-1"></i> Transaksi
                    </x-navbar-link>
                </li>
                <li class="nav-item">
                    <x-navbar-link href="{{ route('report.index') }}" :active="request()->routeIs('report.*')">
                        <i class="ti ti-file-text align-text-top me-1"></i> Laporan
                    </x-navbar-link>
                </li>
            </ul>
        </div>
    </div>
</nav>