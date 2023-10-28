<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <div class="logo">
            <a href="/">Desa Tabbinjai</a>
            <h6>Kec. Sinjai Barat Kab.Sinjai</h6>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/*') ? 'active' : ''}}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pemerintahan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Data Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
            </ul>
        </div>
    </div>
</nav>