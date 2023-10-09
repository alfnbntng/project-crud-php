<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$active_page = 'guru'; // Set halaman aktif
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
        body {
            font-family: "Poppins", sans-serif;
            background: #fafafa;
            color: white;
        }
    </style>
</head>


<body>
  <?php $this->load->view('sidebar'); ?>
  <h2 class="text-center">Tabel Guru</h2>
  <a href="<?php echo base_url('admin/tambah_guru'); ?>" class="btn btn-outline-success my-2">Tambah</a>
    <div class="table-responsive container-fluid">
    <table class="table">
        <thead>
            <tr class="text-white">
                <th class="text-center">No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Alamat</th>
                <th>Mapel</th>
                <th>Jabatan</th>
                <th>Jenis Kelamin</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($guru as $row): ?>
            <tr class="text-white">
                <td class="text-center"><?php echo $no ?></td>
                <td><?php echo $row->nama_guru ?></td>
                <td><?php echo $row->nik ?></td>
                <td><?php echo $row->alamat ?></td>
                <td><?php echo $row->mapel ?></td>
                <td><?php echo $row->jabatan ?></td>
                <td><?php echo $row->gender ?></td>
                <td class="td-actions text-right">
                    <a href="<?php echo base_url('admin/detail_guru/') . $row->id_guru ;?>" type="button" rel="tooltip" class="btn btn-secondary btn-just-icon btn-sm">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a href="<?php echo base_url('admin/ubah_guru/') . $row->id_guru ;?>" type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                    <button  onclick="hapus(<?php echo $row->id_guru; ?>)" type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                </td>
            </tr>
            <?php $no++; endforeach ?>
        </tbody>
    </table>
</div>
</div>
<!-- di sini saya tambahkan tag penutup dari sidebar file sidebar -->

          </div>
        </main>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#sidebarCollapse").on("click", function () {
                $("#sidebar").toggleClass("active");
            });
        });
    </script>
    <script>
        function hapus(id) {
            Swal.fire({
                title: 'Konfirmasi Hapus',
                text: 'Anda yakin ingin menghapus data guru ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengklik "Ya, Hapus!", arahkan ke fungsi hapus di controller
                    window.location.href = "<?php echo base_url(
                        'admin/hapus_guru/'
                    ); ?>" + id;
                }
            });
        }
    </script>
</body>
</html>
