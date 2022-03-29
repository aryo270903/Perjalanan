<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500" style="max-height: 695px;">
        <div class="container">
            <a href="#" class="navbar-brand">Seo<span class="text-primary">Gram.</span></a>

            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/dashboard">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/perjalanan">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profil/edit/{{ auth()->user()->id }}">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ml-lg-2" href="/logout">Keluar</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
