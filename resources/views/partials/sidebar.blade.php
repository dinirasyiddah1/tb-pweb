<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>
            <li class="nav-title">Menu</li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="nav-icon icon-people"></i> Home
                </a>
                <a class="nav-link" href="{{ route('pendidikan.index') }}">
                    <i class="nav-icon icon-info"></i> Pendidikan
                </a>
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="nav-icon icon-people"></i> Manajemen User
                </a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>