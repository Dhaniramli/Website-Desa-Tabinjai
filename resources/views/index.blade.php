@extends('layouts.head')

@section('halaman', 'Home')

@section('content')
<body>
    <section id="profil" class="profil">
        <div class="lisan">
            <h1>
                Selamat Datang
                <span>Di Website Desa Tabbinjai</span>
            </h1>
            <h6><span>Website Desa Tabbinjai</span> adalah usaha menggambarkan secara utuh tentang kondisi Desa.
                Data-data yang
                disusun diambil dari semua data yang tersedia dan bisa didapatkan.
            </h6>
        </div>
        <div class="gambar">
            <img src="images/Group 114.png" alt="">
        </div>
    </section>

    @include('layouts.konten.vismis')

    <div id="struktur" class="struktur">
        <h1 class="keterangan">Struktur Organisasi</h1>
        <div class="cards">
            <div class="card">
                <img src="images/foto.png" alt="Avatar">
                <div class="container">
                    <h4>Asrul Muin</h4>
                    <p>Kepala Desa</p>
                </div>
            </div>
            <div class="card">
                <img src="images/foto.png" alt="Avatar">
                <div class="container">
                    <h4>Asrul Muin</h4>
                    <p>Kepala Desa</p>
                </div>
            </div>
            <div class="card">
                <img src="images/foto.png" alt="Avatar">
                <div class="container">
                    <h4>Asrul Muin</h4>
                    <p>Kepala Desa</p>
                </div>
            </div>
        </div>
    </div>

    <section id="produk-desa" class="produk-desa">
        <h1>Produk Desa</h1>
        <div class="konten">
            <div class="kontenkiri">
                <p><span>Produk Desa Tabbinjai</span> di identifikasi ke dalam beberapa bidang produksi, seperti
                    produksi
                    <span class="gula">Gula Aren</span>, dan <span class="wisata">Wisata Menarik</span> di Desa
                    Tabbinjai.
                </p>
            </div>
            <div class="kontenkanan">
                <div class="pangan">
                    <img src="images/salad (1) 1.png" alt="">
                    <p>Produk Pangan</p>
                </div>
                <div class="wisata">
                    <img src="images/location (1) 1.png" alt="">
                    <p>Produk Wisata</p>
                </div>
            </div>
        </div>
    </section>

    <section id="infografis" class="infografis">
        <div class="info-kiri">
            <div class="subinfokiri">
                <div class="item">
                    <p class="atas">Data Pendidikan</p>
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <div class="item">
                    <p>Data Agama</p>
                    <i class="fa-solid fa-star-and-crescent"></i>
                </div>
                <div class="item">
                    <p class="bawah">Data Kelompok Umur</p>
                    <i class="fa-solid fa-users"></i>

                </div>
            </div>
        </div>
        <div class="info-tengah">
            <p>Infografis Data</p>
        </div>
        <div class="info-kanan">
            <div class="subinfokanan">
                <div class="item">
                    <i class="fa-solid fa-house-chimney"></i>
                    <p class="atas">Data Pembangunan</p>
                </div>
                <div class="item">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <p>Data Wilayah</p>
                </div>
                <div class="item">
                    <i class="fa-solid fa-building-user"></i>
                    <p class="bawah">Data Pekerjaan</p>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="berita">
        <h1>Berita</h1>
        <div class="berita-berita">
            <div class="berita-utama">
                <img src="images/berita.png" alt="">
                <div class="info-berita">
                    <p class="judul">Seminar Desa</p>
                    <i class="fa-regular fa-calendar"></i>
                    <p>22 Februari, 2023</p>
                </div>
                <div class="deskripsi-berita">
                    <h1>Lorem Ipsum is simply dummy text of the printing and typesetting in</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but then
                        stop alsoweay the leap into electronic typesetting, remaining.typesetting, remaining essentially
                        on
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing </p>
                    <p class="bc">Baca Selengkapnya</p>
                </div>
            </div>
            <div class="sub-berita">
                <div class="britae">
                    <img src="images/Rectangle 71.png" alt="">
                    <div class="info-berita">
                        <p class="judul">Seminar Desa</p>
                        <i class="fa-regular fa-calendar"></i>
                        <p>22 Mei, 2023</p>
                    </div>
                    <div class="deskripsi-berita">
                        <h1>Lorem Ipsum is simply text of the printing</h1>
                    </div>
                </div>
                <div class="britae">
                    <img src="images/Rectangle 71.png" alt="">
                    <div class="info-berita">
                        <p class="judul">Seminar Desa</p>
                        <i class="fa-regular fa-calendar"></i>
                        <p>22 Mei, 2023</p>
                    </div>
                    <div class="deskripsi-berita">
                        <h1>Lorem Ipsum is simply text of the printing</h1>
                    </div>
                </div>
                <div class="britae">
                    <img src="images/Rectangle 71.png" alt="">
                    <div class="info-berita">
                        <p class="judul">Seminar Desa</p>
                        <i class="fa-regular fa-calendar"></i>
                        <p>22 Mei, 2023</p>
                    </div>
                    <div class="deskripsi-berita">
                        <h1>Lorem Ipsum is simply text of the printing</h1>
                    </div>
                </div>
                <div class="britae">
                    <img src="images/Rectangle 71.png" alt="">
                    <div class="info-berita">
                        <p class="judul">Seminar Desa</p>
                        <i class="fa-regular fa-calendar"></i>
                        <p>22 Mei, 2023</p>
                    </div>
                    <div class="deskripsi-berita">
                        <h1>Lorem Ipsum is simply text of the printing</h1>
                    </div>
                </div>
                <p class="ls">Lihat Selengkapnya</p>
            </div>
        </div>
    </section>

    <script src="js/script.js"></script>
</body>
@endsection