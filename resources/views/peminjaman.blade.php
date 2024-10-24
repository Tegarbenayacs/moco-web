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

    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-header">
                Tambah Peminjaman
                <button type="button" class="btn btn-primary float-end buton" data-bs-toggle="modal"
                    data-bs-target="#formModal" data-bs-jenis="Tambah"><i class="fa-solid fa-plus"></i>
                    Tambah
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-bordered" id="table">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama Peminjam</th>
                                <th class="text-center">Judul Buku</th>
                                <th class="text-center">Tanggal Pinjam</th>
                                <th class="text-center">Tanggal Kembali</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('components/footer')

    <!-- Modal Tambah -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="dataForm">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="formModal">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama_peminjam" class="form-label">Nama Peminjam</label>
                            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" required>
                        </div>
                        <div class="mb-3">
                            <label for="judul_buku" class="form-label">Judul Buku</label>
                            <select class="form-select" id="judul_buku" name="buku_id" required>
                                <option value="">Pilih Buku</option>
                                <!-- Opsi buku akan diisi melalui AJAX -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
                            <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary buton" data-bs-dismiss="modal">Kembali</button>
                        <button type="submit" class="btn btn-primary buton">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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

    <script>
        $(document).ready(function() {
            // Inisialisasi DataTable dengan pengambilan data via AJAX
            $('#table').DataTable({
                ajax: {
                    url: 'http://192.168.206.117:8000/api/peminjaman',
                    dataSrc: function(json) {

                        return json.datapeminjaman;
                    }
                },
                columns: [{
                        data: null,
                        render: function(data, type, row, index) {
                            return `<div style="text-align: center;">${index.row + 1}</div>`;
                        }
                    },
                    {
                        data: "nama_peminjam",
                        render: function(data) {
                            return `<div>${data}</div>`;
                        }
                    },
                    {
                        data: "buku.judul_buku",
                        render: function(data) {
                            return `<div>${data}</div>`;
                        }
                    },
                    {
                        data: "tanggal_pinjam",
                        render: function(data) {
                            return `<div>${data}</div>`;
                        }
                    },
                    {
                        data: "tanggal_kembali",
                        render: function(data) {
                            return `<div>${data}</div>`;
                        }
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                            <div style="text-align: center;">
                                <button class="btn btn-warning btn-sm" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#formModal" 
                                    data-bs-jenis="Ubah" 
                                    data-bs-id="${row.id}" 
                                    style="margin-right: 5px;">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="hapusData(${row.id})" style="margin-left: 5px;">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>`;
                        }
                    }
                ]
            });
        });

        const targetmodal = document.getElementById('formModal');
        let setIdPeminjaman = null; // Pastikan ini dideklarasikan di luar event listener

        if (targetmodal) {
            targetmodal.addEventListener('show.bs.modal', event => {
                const button = event.relatedTarget; // tombol yang memicu modal
                const jenisModal = button.getAttribute('data-bs-jenis');
                const idPeminjaman = button.getAttribute('data-bs-id'); // Ambil idPeminjaman dari tombol
                setIdPeminjaman = idPeminjaman;

                // Ambil data buku untuk select
                $.ajax({
                    url: 'http://192.168.206.117:8000/api/buku', // Ambil data buku
                    method: 'GET'
                }).done(function(buku) {
                    $('#judul_buku').empty(); // Kosongkan opsi sebelumnya
                    $('#judul_buku').append('<option value="">Pilih Buku</option>'); // Tambahkan opsi default
                    buku.databuku.forEach(function(item) {
                        $('#judul_buku').append('<option value="' + item.id + '">' + item.judul_buku + '</option>');
                    });
                    if (jenisModal === 'Ubah') {
                        $.ajax({
                            url: 'http://192.168.206.117:8000/api/peminjaman/' + setIdPeminjaman, // Gunakan setIdPeminjaman
                            method: 'GET'
                        }).done(function(data) {
                            $('#nama_peminjam').val(data.data.nama_peminjam); // Pastikan menggunakan .val()
                            $('#judul_buku').val(data.data.buku.id); // Set nilai select
                            $('#tanggal_pinjam').val(data.data.tanggal_pinjam);
                            $('#tanggal_kembali').val(data.data.tanggal_kembali);
                        }).fail(function() {
                            Swal.fire('Gagal!', 'Gagal mengambil data peminjaman.', 'error');
                        });
                    }
                }).fail(function() {
                    Swal.fire('Gagal!', 'Gagal mengambil data buku.', 'error');
                });

                const modalTitle = targetmodal.querySelector('.modal-title'); // Pastikan menggunakan targetmodal
                modalTitle.textContent = `${jenisModal} Peminjaman`;
            });
        }

        $(document).ready(function() {
            $("#dataForm").submit(function(event) {
                event.preventDefault();
                const formData = $(this).serialize();
                let url = 'http://192.168.206.117:8000/api/peminjaman/';
                let method = "POST";

                if (setIdPeminjaman) {
                    url += setIdPeminjaman;
                    method = 'PUT';
                }

                $.ajax({
                    url: url,
                    method: method,
                    data: formData
                }).done(function() {
                    Swal.fire({
                        title: "Berhasil!",
                        text: "Data berhasil disimpan!",
                        icon: "success",
                        timer: 2000,
                        timerProgressBar: true,
                        didClose: () => {
                            location.reload();
                        }
                    });
                }).fail(function() {
                    Swal.fire('Gagal!', 'Gagal menyimpan data.', 'error');
                });
            });
        });

        function hapusData(id) {
            Swal.fire({
                title: 'Apakah Anda yakin ingin menghapus data ini?',
                text: "Data ini tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'http://192.168.206.117:8000/api/peminjaman/' + id,
                        method: 'DELETE'
                    }).done(function() {
                        Swal.fire({
                            title: 'Dihapus!',
                            text: 'Data telah dihapus.',
                            icon: 'success',
                            timer: 2000,
                            timerProgressBar: true,
                            didClose: () => {
                                location.reload();
                            }
                        });
                    }).fail(function() {
                        Swal.fire('Gagal!', 'Gagal menghapus data.', 'error');
                    });
                }
            });
        }
    </script>
</body>

</html>