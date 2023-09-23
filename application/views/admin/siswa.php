<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Dashboard App</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Font Awesome CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style>
      @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
          body {
          font-family: "Poppins", sans-serif;
          background: #fafafa;
          }
          .mt-100{

          margin-top:100px;

          }

          .modal-button {
          background-color:rgb(29, 226, 226);
          border-color: rgb(29, 226, 226);
          border-radius: 6px;
          color: white;
          font-size: 17px;
          padding-right: 76px;
          padding-left: 76px;
          }

          .card{
          border-radius: 3vh;
          margin: auto;
          max-width: 380px;
          padding: 7vh 6vh;
          align-items: center;
          box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          }

          @media(max-width:767px){
          .card{
              width: 90vw;
          }
          }
          .card-img{
          padding: 20px 0; 
          width: 40%;  
          }

          .card-img img{
          opacity: 0.7;
          }
          .card-title{
          margin-bottom: unset;
          }
          .card-title p{
          color: rgb(29, 226, 226);
          font-weight: 900;
          font-size: 30px;
          margin-bottom: unset;
          }
          .card-text p{
          color: grey;
          font-size: 25px;
          text-align: center;
          padding: 3vh 0;
          font-weight: lighter;
          }
          .tombol{
          width: 100%;
          background-color: rgb(29, 226, 226);
          border-color: rgb(29, 226, 226);
          border-radius: 25px;
          color: white;
          font-size: 20px;
          }
          .tombol:focus{
          box-shadow: none;
          outline: none;
          box-shadow: none;
          color: white;
          -webkit-box-shadow: none;
          -webkit-user-select: none;
          transition: none; 
          }
          .tombol:hover{
          color: white;
          }
    </style>
  </head>
  <body>
    <?php $this->load->view('sidebar'); ?>
        <h2 class="text-center">Tabel Siswa</h2>
        <a href="<?php echo base_url('admin/tambah_siswa'); ?>" class="btn btn-outline-success my-2">Tambah</a>
        <div class="row">
          <div class="table-responsive container-fluid">
                <table class="table">
                    <thead class="text-white">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th class="text-right">Kelas</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                    <?php $no = 1; foreach($siswa as $row): ?>
                        <tr>
                            <td class="text-center"><?php echo $no ?></td>
                            <td><?php echo $row->nama_siswa ?></td>
                            <td><?php echo $row->nisn ?></td>
                            <td><?php echo $row->alamat ?></td>
                            <td><?php echo $row->gender ?></td>
                            <td><?php echo tampil_full_kelas_byid($row->id_kelas);?></td>
                            <td class="td-actions text-right">
                                <a href="<?php echo base_url('admin/detail_siswa/') . $row->id_siswa ;?>" type="button" rel="tooltip" class="btn btn-secondary btn-just-icon btn-sm">
                                  <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="<?php echo base_url('admin/ubah_siswa/') . $row->id_siswa ;?>" type="button" rel="tooltip" class="btn btn-success btn-just-icon btn-sm">
                                  <i class="fa-solid fa-pencil"></i>
                                </a>
                                <button type="button" rel="tooltip" onclick="hapus(<?php echo $row->id_siswa; ?>)" class="btn btn-danger btn-just-icon btn-sm">
                                  <i class="fa-solid fa-trash"></i>
                                </button>
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
    <script>
        $(document).ready(function () {
            //button siebar
            $(document).ready(function () {
              $("#sidebarCollapse").on("click", function () {
                $("#sidebar").toggleClass("active");
              });
            });

            function hapus(id){
              var yes = confirm('yakin di hapus?');
              if(yes == true) {
                  window.location.href = "<?php echo base_url('admin/hapus_siswa/')?>" + id;
              }
            }
        });
    </script>
  </body>
</html>
