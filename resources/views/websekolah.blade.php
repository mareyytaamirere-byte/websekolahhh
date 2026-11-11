<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SMK PGRI Wlingi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container-fluid">

            <a class="navbar-brand" href="/">
                <h5 class="fw-bold text-primary mb-0">SMK PGRI Wlingi</h5>
                <h6 class="fw-lighter text-secondary" style="font-size: 13px">
                    Sekolah Menengah Kejuruan
                </h6>
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active text-primary" href="#">
                            Beranda
                        </a>
                    </li>

                    {{-- PROFIL --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">
                            Profil
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Tentang Sekolah</a></li>
                            <li><a class="dropdown-item" href="#">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="#">Struktur Organisasi</a></li>
                        </ul>
                    </li>

                    {{-- AKADEMIK --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">
                            Akademik
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Program Keahlian</a></li>
                            <li><a class="dropdown-item" href="#">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="#">Jadwal Pelajaran</a></li>
                        </ul>
                    </li>

                    {{-- KESISWAAN --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">
                            Kesiswaan
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
                            <li><a class="dropdown-item" href="#">OSIS</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi Siswa</a></li>
                        </ul>
                    </li>

                    {{-- BERITA --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#"
                            data-bs-toggle="dropdown">
                            Berita
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Berita Sekolah</a></li>
                            <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                            <li><a class="dropdown-item" href="#">Agenda</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>

                </ul>

                <form class="d-flex">
                    <input class="form-control me-2"
                        type="search"
                        placeholder="Cari...">
                    <button class="btn btn-outline-primary"
                        type="submit">
                        Cari
                    </button>
                </form>

            </div>
        </div>
    </nav>


    {{-- CAROUSEL --}}
    <div id="carouselSekolah" class="carousel slide">

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="assets/smk.jfif"
                    class="d-block w-100"
                    style="height: 300px; object-fit: cover;"
                    alt="Sekolah">

                <div class="carousel-caption text-start">
                    <div class="bg-dark bg-opacity-75 p-3 rounded">
                        <h4>Selamat Datang di Website SMK PGRI Wlingi</h4>
                        <p>
                            Mewujudkan generasi yang berkarakter,
                            terampil dan siap menghadapi dunia kerja.
                        </p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="assets/BannER.jpg"
                    class="d-block w-100"
                    style="height: 300px; object-fit: cover;"
                    alt="Kegiatan Sekolah">
            </div>

            <div class="carousel-item">
                <img src="assets/siswasekolah.jpg"
                    class="d-block w-100"
                    style="height: 300px; object-fit: cover;"
                    alt="Siswa Sekolah">
            </div>

        </div>

        <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselSekolah"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselSekolah"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

    </div>


    {{-- KONTEN --}}
    <div class="container mt-3">

        <div class="row">

            {{-- SAMBUTAN --}}
            <div class="col-md-9">

                <div class="card">

                    <div class="card-header bg-primary-subtle">
                        <b>👤 Sambutan Kepala Sekolah</b>
                    </div>

                    <div class="card-body">

                        <img src="assets/kepala sekolah.jfif"
                            class="img-thumbnail float-start me-3 mb-2"
                            width="180"
                            height="150"
                            alt="Kepala Sekolah">

                        <h5 class="text-primary">
                            Assalamu'alaikum Wr. Wb.
                        </h5>

                        <p>
                            Selamat datang di website resmi SMK PGRI Wlingi.
                            Website ini menjadi sarana informasi bagi siswa,
                            guru, orang tua, dan masyarakat mengenai kegiatan
                            serta informasi sekolah.
                        </p>

                        <p>
                            SMK PGRI Wlingi berupaya memberikan pendidikan
                            dan keterampilan kepada siswa agar memiliki
                            pengetahuan, keterampilan, pengalaman, serta
                            kesiapan untuk melanjutkan pendidikan maupun
                            memasuki dunia kerja.
                        </p>

                        <p>
                            Semoga website ini dapat memberikan informasi
                            yang bermanfaat bagi seluruh warga sekolah.
                        </p>

                        <b>
                            Kepala SMK PGRI Wlingi
                        </b>

                    </div>

                </div>


                {{-- KEGIATAN TERBARU --}}
                <div class="card mt-3">

                    <div class="card-header bg-primary-subtle">
                        <b>📰 Kegiatan Terbaru</b>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            {{-- KEGIATAN 1 --}}
                            <div class="col-md-4 mb-3">

                                <div class="card h-100">

                                    <img src="assets/kegiatanpelajaran.jpg"
                                        class="card-img-top"
                                        style="height:150px; object-fit:cover;">

                                    <div class="card-body">
                                        <h6 class="fw-bold">
                                            Kegiatan Pembelajaran
                                        </h6>

                                        <small class="text-secondary">
                                            📅 20 September 2026
                                        </small>

                                        <p class="mt-2">
                                            Kegiatan pembelajaran di SMK PGRI Wlingi
                                            berlangsung dengan metode interaktif
                                            dan berbasis praktik untuk meningkatkan
                                            pemahaman siswa.
                                        </p>
                                    </div>

                                </div>

                            </div>


                            {{-- KEGIATAN 2 --}}
                            <div class="col-md-4 mb-3">

                                <div class="card h-100">

                                    <img src="assets/hero-sekolah.jpeg"
                                        class="card-img-top"
                                        style="height:150px; object-fit:cover;">

                                    <div class="card-body">
                                        <h6 class="fw-bold">
                                           LSP Sekolah

                                        </h6>

                                        <small class="text-secondary">
                                            📅 18 September 2026
                                        </small>

                                        <p class="mt-2">
                                            LSP (Lembaga Sertifikasi Profesi)
                                            di SMK PGRI Wlingi untuk meningkatkan
                                            kompetensi siswa.
                                        </p>
                                    </div>

                                </div>

                            </div>


                            {{-- KEGIATAN 3 --}}
                            <div class="col-md-4 mb-3">

                                <div class="card h-100">

                                    <img src="assets/10-Sosialisasi-SMK-PGRI-Wlingi-1.jpg"
                                        class="card-img-top"
                                        style="height:150px; object-fit:cover;">

                                    <div class="card-body">
                                        <h6 class="fw-bold">
                                            SMK PGRI Wlingi
                                        </h6>

                                        <small class="text-secondary">
                                            📅 18 September 2026
                                        </small>

                                        <p class="mt-2">
                                            SMK PGRI Wlingi mengadakan kegiatan
                                            sosialisasi untuk meningkatkan
                                            pemahaman siswa tentang program
                                            keahlian dan kegiatan sekolah.
                                        </p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- PENGUMUMAN --}}
            <div class="col-md-3">

                <div class="card">

                    <div class="card-header bg-primary-subtle">
                        <b>📢 Pengumuman Terbaru</b>
                    </div>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <b>Pendaftaran Peserta Didik Baru</b>
                            <br>
                            <small class="text-secondary">
                                📅 15 April 2026
                            </small>
                        </li>

                        <li class="list-group-item">
                            <b>Jadwal Ujian Semester</b>
                            <br>
                            <small class="text-secondary">
                                📅 10 April 2026
                            </small>
                        </li>

                        <li class="list-group-item">
                            <b>Informasi Kegiatan Sekolah</b>
                            <br>
                            <small class="text-secondary">
                                📅 25 Maret 2026
                            </small>
                        </li>

                        <li class="list-group-item">
                            <b>Pengumuman Akademik</b>
                            <br>
                            <small class="text-secondary">
                                📅 20 Maret 2026
                            </small>
                        </li>

                        <li class="list-group-item">
                            <b>Kegiatan Bakti Sosial</b>
                            <br>
                            <small class="text-secondary">
                                📅 12 Maret 2026
                            </small>
                        </li>

                    </ul>

                    <div class="card-body">
                        <button class="btn btn-primary w-100">
                            Lihat Semua Pengumuman →
                        </button>
                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- FOOTER --}}
    <footer class="bg-dark text-white mt-4 py-4">

        <div class="container">

            <div class="row">

                <div class="col-md-4">
                    <h5>SMK PGRI Wlingi</h5>
                    <p class="mb-0">
                        Sekolah Menengah Kejuruan
                    </p>
                </div>

                <div class="col-md-4">
                    <h6>Website Sekolah</h6>
                    <p class="mb-0">
                        Informasi pendidikan dan kegiatan
                        SMK PGRI Wlingi.
                    </p>
                </div>

                <div class="col-md-4">
                    <h6>Kontak</h6>
                    <p class="mb-0">
                        Wlingi, Kabupaten Blitar
                    </p>
                </div>

            </div>

            <hr>

            <div class="text-center">
                © 2026 SMK PGRI Wlingi
            </div>

        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>