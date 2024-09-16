<nav id="sidebar" class="sidebar bg-dark text-white">
    <div class="position-sticky">
        <div class="p-4">
            <h3>Dashboard</h3>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{route('Dashboard')}}" class="nav-link text-white">Dashboard</a></li>
                <li class="nav-item"><a href="{{route('Daftar-Buku')}}" class="nav-link text-white">Daftar Buku</a></li>
                <li class="nav-item"><a href="{{route('Daftar-Penulis')}}" class="nav-link text-white">Daftar Penulis</a></li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#profileSubmenu">
                        Profile <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="collapse nav flex-column" id="profileSubmenu">
                        <li class="nav-item"><a href="#" class="nav-link text-white">View Profile</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white">Edit Profile</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white" data-bs-toggle="collapse" data-bs-target="#settingsSubmenu">
                        Settings <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="collapse nav flex-column" id="settingsSubmenu">
                        <li class="nav-item"><a href="#" class="nav-link text-white">General</a></li>
                        <li class="nav-item"><a href="#" class="nav-link text-white">Security</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>