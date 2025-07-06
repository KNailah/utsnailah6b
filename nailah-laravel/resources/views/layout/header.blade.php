<nav class="navbar navbar-expand-lg sticky-top mb-4">
    <div class="container">
            <a class="navbar-brand" href="#">
                <i class="bi bi-calendar3"></i> Jadwal Akademik
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dsn-data') }}" data-bs-toggle="tab">
                            <i class="bi bi-person-badge"> Dosen</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mk-data') }}" data-bs-toggle="tab">
                            <i class="bi bi-journal-bookmark"> Matakuliah</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('ruang-data') }}" data-bs-toggle="tab">
                            <i class="bi bi-building"> Ruangan</i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jk-data') }}" data-bs-toggle="tab">
                            <i class="bi bi-calendar-event"> Jadwal Kuliah</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>