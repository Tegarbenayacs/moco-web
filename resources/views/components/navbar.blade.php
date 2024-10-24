<nav id="navbar">
    <div class="main-menu stellarnav mx-auto">
        
        
        <img src="/assets/images/MOCO.png" alt="logo" class="logo">
        <ul class="menu-list">
            <li class="menu-item {{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Beranda</a></li>
            <li class="menu-item {{ request()->is('buku') ? 'active' : '' }}"><a href="{{ url('/buku') }}" class="nav-link">Buku</a></li>
            <li class="menu-item {{ request()->is('peminjaman') ? 'active' : '' }}"><a href="{{ url('/peminjaman') }}" class="nav-link">Peminjaman</a></li>
            <li class="menu-item {{ request()->is('tentang-kami') ? 'active' : '' }}"><a href="{{ url('/tentang-kami') }}" class="nav-link">Tentang Kami</a></li>
        </ul>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

    </div>
</nav>
