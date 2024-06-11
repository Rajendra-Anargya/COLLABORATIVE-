<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container pt-4 pb-4">
        <!-- Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" height="65">
        </a>

        <!-- Toggle button untuk mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/"></a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">Status</a>
                    </li>
                @endauth
            </ul>
        </div>
</nav>
</section>