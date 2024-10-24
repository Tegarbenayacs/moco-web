<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moco - Peminjaman</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- DataTables CSS untuk responsif -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.5.4/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/vendor.css">
    <style>
        /* Gaya untuk card */
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: var(--light-color);
            /* Menggunakan warna terang */
            max-width: 90%;
            /* Atur lebar maksimum card menjadi 90% */
            margin: 20px auto;
            /* Pusatkan card dengan margin atas dan bawah */
        }

        .card-header {
            background-color: var(--accent-color);
            /* Menggunakan warna aksen */
            color: white;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        /* Gaya untuk tabel */
        table {
            border-collapse: collapse;
            width: 100%;
            /* Pastikan tabel mengambil lebar penuh */
            background-color: white;
            /* Warna latar belakang tabel */
            border: 1px solid #dee2e6;
            /* Tambahkan border untuk tabel */
        }

        th {
            background-color: var(--light-color);
            /* Menggunakan warna terang */
            color: var(--dark-text-color);
            /* Menggunakan warna teks gelap */
            padding: 12px;
            border-bottom: 2px solid #dee2e6;
            text-align: center;
            /* Pusatkan teks di header */
        }

        td {
            padding: 8px;
            /* Mengurangi padding vertikal */
            border-bottom: 1px solid #dee2e6;

        }

        tr:hover {
            background-color: #f1f1f1;
            /* Warna latar belakang saat hover */
        }

        /* Gaya untuk tombol */
        .btn {
            border-radius: 5px;
            padding: 2px 12px;
            /* Mengurangi padding pada tombol */
        }

        .btn-primary {
            background-color: #78634A;
            /* Menggunakan warna aksen yang lebih gelap */
            border-color: #78634A;
        }

        .btn-primary:hover {
            background-color: #5a4a35;
            /* Warna hover yang lebih gelap */
            border-color: #5a4a35;
            /* Warna border hover yang lebih gelap */
        }

        .btn-danger {
            background-color: #dc3545;
            /* Warna merah */
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            /* Warna hover merah */
            border-color: #bd2130;
        }

        /* Media Queries untuk Responsivitas */
        @media (max-width: 768px) {
            .card {
                max-width: 100%;
                /* Card mengambil lebar penuh pada perangkat kecil */
                margin: 10px;
                /* Mengurangi margin pada perangkat kecil */
            }

            th,
            td {
                padding: 8px;
                /* Mengurangi padding pada tabel untuk perangkat kecil */
            }
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

    <div id="header-wrap">
        <header id="header">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-10">
                        @include('components/navbar')

                    </div>

                </div>
            </div>
        </header>

    </div><!--header-wrap-->



    <section id="team" class="py-5">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col">
                    <h2 class="display-4">Tentang Kami</h2>
                    <p class="lead">Bersama kami membangun masa depan dengan inovasi dan kolaborasi!</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card team-member">
                        <img src="/assets/images/tegar.jpg" class="card-img-top" alt="Tegar Benaya C.S" style="object-fit: cover; width: 300px; height: 300px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Tegar Benaya C.S</h5>
                            <p class="card-text">Leader & Back End</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card team-member">
                        <img src="/assets/images/dion.jpg" class="card-img-top" alt="Fergi Dion" style="object-fit: cover; width: 300px; height: 300px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">FergiDion</h5>
                            <p class="card-text">Documenter</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card team-member">
                        <img src="/assets/images/iffan.jpg" class="card-img-top" alt="Iffan Elyasa" style="object-fit: cover; width: 300px; height: 300px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Iffan Elyasa</h5>
                            <p class="card-text">Front End</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card team-member">
                        <img src="/assets/images/isa.jpg" class="card-img-top" alt="Bryan Isa" style="object-fit: cover; width: 300px; height: 300px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">Bryan Isa</h5>
                            <p class="card-text">Postman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components/footer')

    <script src="https://kit.fontawesome.com/61dd260dcf.js" crossorigin="anonymous"></script>
    <!-- jQuery dan Bootstrap JS -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="dist/js/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.4/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.4/js/responsive.bootstrap5.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/script.js"></script>


</body>

</html>