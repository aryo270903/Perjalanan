<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <h1 class="mb-0 site-logo">Peduli Diri<span class="text-primary">.</span> </a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profil/edit/{{ auth()->user()->id }}">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/perjalanan">Perjalanan</a>
                </li>
                <li class="nav-item">
                    @if (auth()->user()->role == "admin")
                <li><a href="/profil" class="nav-link">Data User</a></li>
                @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/logout"> Keluar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>