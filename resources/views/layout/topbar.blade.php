
<div class="container d-none d-lg-block">
    <div class="row">
        <div class="col-12 text-center mb-4 mt-5">
            <h1 class="mb-0 site-logo">Peduli Diri<span
                        class="text-primary">.</span> </a></h1>
        </div>
    </div>
</div>
<div id="sticky-wrapper" class="sticky-wrapper" style="height: 73.3438px;">
    <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner" style="width: 915px;">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-md-10 main-menu">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="/home" class="text-warning icon-home">Dashboard</a></li>
                            <li><a href="/profil/edit/{{ auth()->user()->id }}" class="text-warning icon-account_circle">Profil</a></li>
                            <li><a href="/perjalanan" class="text-warning icon-directions_walk">Perjalanan</a></li>
                            @if (auth()->user()->role == "admin") 
                            <li><a href="/profil" class="text-warning icon-account_box">Data User</a></li>
                            @endif
                            <li><a href="/logout" class="text-warning icon-power_settings_new">Keluar</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0"><a href="#"
                        class="site-menu-toggle js-menu-toggle text-black float-right"><span
                            class="icon-menu h3"></span></a></div>

            </div>
        </div>

    </header>
</div>
