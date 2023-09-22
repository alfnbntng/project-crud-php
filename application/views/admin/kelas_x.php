<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelas X</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        body {
            font-family: "Poppins", sans-serif;
            background: #fafafa;
        }
    </style>
</head>

<body>
<?php $this->load->view('sidebar'); ?>
    <h2>Kelas X</h2>
    <div class="row">
        <?php foreach ($siswa_kelas_x as $siswa) : ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="card bg-transparent text-white">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="<?php echo base_url('uploads/siswa/' . $siswa->foto_siswa); ?>" class="img-fluid" />
                        <a href="#!">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $siswa->nama_siswa ?></h5>
                        <p class="card-text text-center"><?php echo $siswa->alamat ?></p>
                        <!-- Tambahkan tombol Detail dengan atribut data-siswa -->
                        <button type="button" class="btn btn-primary show-detail" data-toggle="modal" data-target="#detailModal" data-siswa='<?php echo json_encode($siswa); ?>'>Detail</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Modal untuk menampilkan detail siswa -->
   <!-- Tampilan modal untuk menampilkan detail siswa -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Detail Siswa</h5>
            </div>
            <div class="modal-body bg-dark text-white">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control bg-dark text-white" id="nama" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN</label>
                        <input type="text" class="form-control bg-dark text-white" id="nisn" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control bg-dark text-white" id="alamat" readonly>
                    </div>
                    <!-- Tambahkan input lainnya sesuai kebutuhan -->
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Tangkap klik tombol Detail
            $('.show-detail').click(function () {
                var siswaData = $(this).data('siswa'); // Ambil data siswa dari atribut data-siswa
                populateModal(siswaData); // Panggil fungsi untuk mengisi modal dengan data siswa
            });

            // Fungsi untuk mengisi modal dengan data siswa
            function populateModal(siswaData) {
                $('#nama').val(siswaData.nama_siswa);
                $('#nisn').val(siswaData.nisn);
                $('#alamat').val(siswaData.alamat);
                // Tambahkan data lainnya sesuai kebutuhan

                // Aktifkan modal
                $('#detailModal').modal('show');
            }
        });
    </script>
</body>
</html>
