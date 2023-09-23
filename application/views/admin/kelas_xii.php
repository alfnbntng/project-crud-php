<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_page = 'x'; // Set halaman aktif
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Dashboard App</title>
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
            <!-- Tambahkan kode HTML untuk tampilan kelas_x.php sesuai dengan kebutuhan Anda -->
<h2 class="text-center py-3">Kelas XII</h2>
    <div class="row">
        <?php foreach ($siswa_kelas_xii as $siswa) : ?>
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
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


  
<!-- di sini saya tambahkan tag penutup dari sidebar file sidebar -->

          </div>
        </main>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
